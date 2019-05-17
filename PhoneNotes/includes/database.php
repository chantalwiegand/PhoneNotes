<?php
/**
 * Created by PhpStorm.
 * User: chantalwiegand
 * Date: 2019-05-10
 * Time: 09:21
 */

require_once('config.php');

class MySQLDatabase
{

    private $connection;

    public function __construct()
    {
        $this->open_connection();
    }

    public function openConnection()
    {
        $this->connection = mysqli_connect(DB_SERVER, DB_NAME, DB_USER, DB_PASSWORD);
        if (mysqli_connect_errno()) {
            die("Database connection failed:" . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
        }
    }
}

$database = new MySQLDatabase();

$db =& $database;
