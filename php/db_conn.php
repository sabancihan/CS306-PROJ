<?php

$sname = "eu-cdbr-west-01.cleardb.com";
$uname = "b1a6561f4a50b1";
$password = "fcbcf6e4";
$db_name = "heroku_501e230bb38b344";

$conn  = mysqli_connect($sname, $uname,$password,$db_name);

if(!$conn) {
    echo "Connection failed";
}

