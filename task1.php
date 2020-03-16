<?php
require_once ("WorkWithCookie.php");
$CookieObj = new WorkWithCookie();
$CookieObj->Save('visit',1,0);
if ($CookieObj->IsSetCheck('visit')) {
    $CookieObj->Save('visit',$CookieObj->Select('visit')+1,0);
    echo 'Вы посещали наш сайт '.$CookieObj->Select('visit').' раз!';
}
else
{
   echo "Добро пожаловать!";
}
//echo $CookieObj->Delete('visit');



