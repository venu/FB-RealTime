<?php
require "config.php";

$args = array( 'grant_type' => 'client_credentials', 
                'client_id' => FB_APP_ID, 
                'client_secret' =>  FB_APP_SECRET);

  $ch = curl_init(); 
  $url = 'https://graph.facebook.com/oauth/access_token'; 
  curl_setopt($ch, CURLOPT_URL, $url); 
  curl_setopt($ch, CURLOPT_HEADER, false); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
  curl_setopt($ch, CURLOPT_POST, true); 
  curl_setopt($ch, CURLOPT_POSTFIELDS, $args); 
  $token = curl_exec($ch); 
  curl_close($ch);
  
  parse_str($token, $tokens);
  $access_token = (isset( $tokens['access_token'])) ?  $tokens['access_token'] : '';
  if(!$access_token) die("Unable to get access token");