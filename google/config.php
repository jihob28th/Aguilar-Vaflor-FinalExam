<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('885997956342-c6mucn8cnfdrmjega6ocqtg1metkuqv3.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('5XJcKOxcyWFTbuR5FnanKdO4');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://aguilar-vaflor-finalexam.herokuapp.com/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
