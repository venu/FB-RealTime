<?php
require "access_token.php";

//user updates
$param = array('access_token' => $access_token,
                'object' => 'user',
                'fields' => 'name,feed,email, friends, activities, interests, music, books, movies, likes, checkins',
                'callback_url' => 'http://dev.riktamtech.com/venu/facebook/real_time/callback.php',
                'verify_token' => VERIFY_TOKEN
                );
$subs = $facebook->api('/'.FB_APP_ID.'/subscriptions', 'POST', $param);

//permission updates
$param = array('access_token' => $access_token,
                'object' => 'permissions',
                'fields' => 'email, user_birthday, user_location',
                'callback_url' => 'http://dev.riktamtech.com/venu/facebook/real_time/callback.php',
                'verify_token' => VERIFY_TOKEN
                );
$subs = $facebook->api('/'.FB_APP_ID.'/subscriptions', 'POST', $param);

echo "Sucessfully subscribed";