<?php
require_once ("WorkWithCookie.php");
$CookieObj = new WorkWithCookie();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$status=$CookieObj->clearData($_POST['off']);
if (!empty($status))
{
    $CookieObj->Save('show','none',time()+3600*24*30);
}
}
?>
<div style="background: red;display: <?php echo $CookieObj->Select('show') ?$CookieObj->Select('show'):"block" ?>">
   <div style="width: 100px;height: 200px;font-size:40px;">Баннер</div>
</div>
<form id="task2" action="" method="POST">
    <input name="off" type="submit" value="Больше не показывать">
</form>