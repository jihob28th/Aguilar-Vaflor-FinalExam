<?php

//google file to read data components from User and create sessions

include('config.php');

$login_button = '';

if(isset($_GET["code"])){
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
 if(!isset($token['error'])){
  $google_client->setAccessToken($token['access_token']);
  $_SESSION['access_token'] = $token['access_token'];
  $google_service = new Google_Service_Oauth2($google_client);
  $data = $google_service->userinfo->get();
  if(!empty($data['given_name'])){
   $_SESSION['user_first_name'] = $data['given_name'];
  }
  if(!empty($data['family_name'])){
   $_SESSION['user_last_name'] = $data['family_name'];
  }
  if(!empty($data['email'])){
   $_SESSION['user_email_address'] = $data['email'];
  }
  if(!empty($data['gender'])){
   $_SESSION['user_gender'] = $data['gender'];
  }
  if(!empty($data['picture'])){
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}
if(!isset($_SESSION['access_token'])){
//assign my custom google button
 $login_button = '<br><a href="'.$google_client->createAuthUrl().'" class="btn-google m-b-20">Log in with Google &nbsp; </a>';
}
?>
