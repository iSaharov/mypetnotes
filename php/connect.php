<?php
$dbUser = "petadmin";
$dbPass = "petadmin";
$dbConn = "localhost";
$dbName = "mypetnotes";
$mysqli = new mysqli($dbConn, $dbUser, $dbPass, $dbName);
if($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}
if (!$mysqli -> set_charset("utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", $mysqli->error);
    exit();
}