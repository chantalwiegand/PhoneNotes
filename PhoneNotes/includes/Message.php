<?php

class Message
{
    protected static $table_name = "message";
    protected static $db_fields = array('message_id', 'message_description');
    private $message_id;
    private $message_description;
}