<?php
function getDb(): PDO
{
    $dsn = 'mysql:dbname=kintai; host=127.0.0.1; charset=utf8';
    $usr = 'root';
    $passwd = 'root';

    $db = new PDO($dsn, $usr, $passwd);

    return $db;
}
