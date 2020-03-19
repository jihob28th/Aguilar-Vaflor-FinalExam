<?php

include('facebook/config2.php');

$google_client->revokeToken();
session_destroy();
header('location:index.php');

?>
