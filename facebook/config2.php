<?php 

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API 

$facebook = new \Facebook\Facebook([
  'app_id'      => '201031654519060',
  'app_secret'     => '90e95ddb9b0138a8ddf7c5e7b5a7c725',
  'default_graph_version'  => 'v2.10'
]);

?>
