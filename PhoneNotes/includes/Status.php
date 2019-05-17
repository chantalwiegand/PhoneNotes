<?php
/**
 * Created by PhpStorm.
 * User: chantalwiegand
 * Date: 2019-05-10
 * Time: 09:14
 */

class Status
{
    protected static $table_name = "status";
    protected static $db_fields = array('status_id', 'status_name');
    private $status_id;
    private $status_name;
}

