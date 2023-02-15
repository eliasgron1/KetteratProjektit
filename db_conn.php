<?php

$sname= "mariadb.vamk.fi";
$unmae= "e2203097";
$password = "fuEDuecbwvy";
$db_name = "e2203097_ketterat";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}