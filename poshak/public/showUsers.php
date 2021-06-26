<?php
include '../includes/settings.php';
include ('../includes/functions.php') ;

$db = new DB();
$table = User::find();
unset( $db );

$alerts = alerts();

include '../includes/views/showUsers.php';