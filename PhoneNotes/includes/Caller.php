<?php
/**
 * Created by PhpStorm.
 * User: chantalwiegand
 * Date: 2019-05-10
 * Time: 09:13
 */

class Caller
{
    protected static $table_name = "caller";
    protected static $db_fields = array('caller_id', 'caller_name', 'caller_telephone_number', 'caller_company_name');

    private $caller_id;
    private $caller_name;
    private $caller_telephone_number;
    private $caller_company_name;

}