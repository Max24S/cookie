<?php
require_once ("WorkWithCookie.php");
$CookieObj = new WorkWithCookie();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$color= $_POST['Colors'];
$deleteColor=$_POST['Delete'];
    if (!empty($color)) {
        $CookieObj->Save('color', $color, time()+3600*24*30);
    }
    if (!empty($deleteColor))
    {
        $CookieObj->Delete('color');
    }
}
?>
<div style="background: <?php echo $CookieObj->Select('color') ?>; height: 400px;"></div>
<form id="task5" action="" method="POST">
    <select name="Colors">
        <option value="none">Без цвета</option>
        <option value="green">Зеленый</option>
        <option value="blue">Синий</option>
        <option value="red">Красный</option>
    </select>
    <button name="SelectColor">Сохранить</button>
    <button name="Delete" value="none">Удалить цвет</button>
</form>
