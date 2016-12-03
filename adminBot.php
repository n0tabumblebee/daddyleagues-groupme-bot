<?php

// the admin bot setup

include('./httpful.phar');
include('./functions.php');

// this is found at http://dev.groupme.com/bots
$bot_token = "17879f4bc948f743dbd128df04";

// adds admin commands 
$isAdmin = TRUE;
include('adminFunctions.php');

include('./index.php');

?>
