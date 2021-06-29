<?php
include '__php__.php';


$db = new DB();
$table = User::find();
unset( $db );

$alerts = Alert::alerts();

include 'views/showUsers.php';