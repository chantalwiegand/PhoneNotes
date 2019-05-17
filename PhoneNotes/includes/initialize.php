<?php

defined('DS')? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', '~'.DS.'PhpstormProjects'.DS.'PhoneNotes');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

// load config file first
require_once(LIB_PATH.DS.'config.php');

// load core objects
require_once(LIB_PATH.DS.'database.php');
require_once(LIB_PATH.DS.'database_object.php');

// load database-related classes
require_once(LIB_PATH.DS.'Caller.php');
require_once(LIB_PATH.DS.'Employee.php');
require_once(LIB_PATH.DS.'Message.php');
require_once(LIB_PATH.DS.'Note.php');
require_once(LIB_PATH.DS.'NoteStatus.php');
require_once(LIB_PATH.DS.'Status.php');
