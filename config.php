<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

define('FB_APP_ID', 234006496703919);
define('FB_APP_SECRET', '711992d9eb13f27fc4a23863162ee5ab');

define('VERIFY_TOKEN', 'venu'); 

require "facebook/src/facebook.php";
$facebook = new Facebook(array(
  'appId'  => FB_APP_ID,
  'secret' => FB_APP_SECRET,
  'cookie' => false,
));
