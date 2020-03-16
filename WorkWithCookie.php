<?php

class WorkWithCookie
{
    function Save($name,$value, int $time)
    {
        $value = $this->clearData($value);

        setcookie($name, $value,$time);
    }
    function IsSetCheck($name)
    {
        return isset($_COOKIE[$name]);
    }
    function clearData($value)
    {
        $value=trim(strip_tags($value));

        return $value;
    }
    function  Delete ($name)
    {
        setcookie($name,"",time()-3600);
    }
    function Select($name)
    {
        if (isset($_COOKIE[ $name])) return $_COOKIE[ $name];
    }

}