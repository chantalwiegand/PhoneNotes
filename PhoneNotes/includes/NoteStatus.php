<?php
/**
 * Created by PhpStorm.
 * User: chantalwiegand
 * Date: 2019-05-10
 * Time: 09:43
 */

class NoteStatus
{
    protected static $table_name = "note_status";
    protected static $db_fields = array('note_status_id', 'note_id', 'status_id');

    private $note_status_id;
    private $note_id;
    private $status_id;
}