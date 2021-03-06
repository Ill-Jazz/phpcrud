<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


class Database
{

    public static function openConnection(): PDO

    {
        try {
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $db = "crud";

            $driverOptions = [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,];
            echo 'connected succesfully';
            return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
        } catch (PDOException $e) {
            echo 'connection failed' . $e->getMessage();
        }
    }

}