<?php
include '../includes/settings.php';
include ('../includes/functions.php') ;

$db = new DB();
$table = Message::find();
unset( $db );

$alerts = alerts();

include '../includes/views/showMessages.php';