<?php


defined('DS') ? null : define('DS',DIRECTORY_SEPARATOR);
defined('APP_ROOT') ? null : define('APP_ROOT',DS.'xampp'.DS.'htdocs'.DS.'USM');
defined('INC_PATH') ? null : define('INC_PATH',APP_ROOT.DS.'includes');
defined('CORE_PATH') ? null : define('CORE_PATH',APP_ROOT.DS.'core');
defined('MODELS_PATH') ? null : define('MODELS_PATH',CORE_PATH.DS."models");



require_once(INC_PATH.DS.'config.php');

require_once(CORE_PATH.DS.'initialize.php');

require_once(CORE_PATH.DS."operations.php");

// Loading models
require_once(MODELS_PATH.DS."Student.php");
require_once(MODELS_PATH.DS."Professor.php");
require_once(MODELS_PATH.DS."StudyDivision.php");
require_once(MODELS_PATH.DS."Module.php");
require_once(MODELS_PATH.DS."Group.php");
require_once(MODELS_PATH.DS."Classroom.php");




?>