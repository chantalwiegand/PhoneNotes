<?php
/**
 * Created by PhpStorm.
 * User: chantalwiegand
 * Date: 2019-05-10
 * Time: 09:14
*/

class Note
{
    protected static $table_name = "note";
    protected static $db_fields = array('note_id', 'message_id', 'caller_id', 'employee_id');

    private $note_id;
    private $message_id;
    private $caller_id;
    private $employee_id;
}