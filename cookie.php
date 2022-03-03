<?php
$name  = "petson";
$value =  "vedastus";

setcookie($name, $value,time() + 3600*24*30);

if(!isset($_COOKIE[$name]))
{
    echo("fail");
}

else{
    echo($_COOKIE[$name]);
}

if(count($_COOKIE) > 0)
{
 echo("cookies is abled");
}

else{
    echo("cookie is dissabled");
}




?>