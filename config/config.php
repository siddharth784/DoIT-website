<?php

/* APP SETTINGS */

define("COMPANY_NAME","Robato Systems Pvt. Ltd.");
define("TIME_ZONE" , "GMT+8");
define("LANGUAGE" , "en");


// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','doit');

// Establish database connection.
try
{
$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}


switch (LANGUAGE) {
    case 'en':
    require 'lang/en.php';
    break;
  
    case 'es':
    require 'lang/es.php';
    break;
  
  }