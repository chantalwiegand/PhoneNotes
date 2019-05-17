<?php
/**
 * Created by PhpStorm.
 * User: chantalwiegand
 * Date: 2019-05-10
 * Time: 09:12
 */

class Employee {
    protected static $table_name = "employee";
    protected static $db_fields = array('employee_id', 'employee_id');

    private $employee_id;
    private $employee_name;
}