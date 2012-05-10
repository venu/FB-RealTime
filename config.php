<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

define('FB_APP_ID', 'XXXXXXXXXX');
define('FB_APP_SECRET', 'XXXXXXXXXXXXXXXX');

define('VERIFY_TOKEN', 'venu'); 

require "facebook/src/facebook.php";
$facebook = new Facebook(array(
  'appId'  => FB_APP_ID,
  'secret' => FB_APP_SECRET,
  'cookie' => false,
));
