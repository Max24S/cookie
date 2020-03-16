<?php
require_once ("WorkWithCookie.php");
$CookieObj = new WorkWithCookie();
$CookieObj->Save('lastVisit',  time(), time()+3600*24*30);
$diff = (time() - $CookieObj->Select('lastVisit'))/86400;
echo 'Вы не были на сайте ' . round($diff) . ' дней';
?>

