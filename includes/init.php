<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

define('SITE_ROOT', DS . 'Applications' . DS . 'XAMPP' . DS . 'xamppfiles' . DS . 'htdocs' . DS . 'subres2t');


defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'includes');

require_once(INCLUDES_PATH . DS ."functions.php");
require_once(INCLUDES_PATH . DS ."database.php");
require_once(INCLUDES_PATH . DS ."db_objects.php");
require_once(INCLUDES_PATH . DS ."managedata.php");
require_once(INCLUDES_PATH . DS ."sector.php");
require_once(INCLUDES_PATH . DS ."session.php");



?>