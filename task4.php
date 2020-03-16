<?php
require_once ("WorkWithCookie.php");
$CookieObj = new WorkWithCookie();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date= $CookieObj->clearData($_POST['date']);
    if (!empty($date))
    {
        $parse = explode('-', $date);
        $day = $parse[2];
        $month = $parse[1];
        $year = date('Y');
        $birthDate = "$year-$month-$day";
        $now=date("Y-m-d");
        if(strtotime($birthDate)<strtotime($now)){
            $year = date('Y')+1;
            $birthDate = "$year-$month-$day";
        }
        $diff = strtotime($birthDate) - strtotime($now);
        $CookieObj->Save('birthday', $birthDate, time()+3600*24*30);
        if($CookieObj->IsSetCheck('birthday')){
            $birthday = floor($diff/(86400));
            if($birthday==0){
                $notification = 'Поздравляем с Днем Рождения!';
            }else{
                $notification = 'До Вашего дня рождения осталось '.$birthday.' дней';
            }
        }
    }
}

?>

<form id="task4" action="" method="POST">
    <label for="date_id">Введите дату:</label>
    <input id="date_id" name="date" type="date">
    <input name="send" type="submit">
</form>
<div><?php echo $notification;?></div>