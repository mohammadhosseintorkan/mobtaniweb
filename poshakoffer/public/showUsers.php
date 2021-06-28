<?php
include '__php__.php';


$db = new DB();
$table = User::find();
unset( $db );

$alerts = alerts();

include 'views/showUsers.php';