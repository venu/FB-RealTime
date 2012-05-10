<?php
require "access_token.php";

//Note that with the below code, ALL subscriptions will be deleted.
//If you just want to delete a particular subscription (say for the "user" subscription), specify this via the object parameter.
$param = array('access_token' => $access_token);
$subs = $facebook->api('/'.FB_APP_ID.'/subscriptions', 'DELETE', $param); 