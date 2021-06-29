<?php
include '__php__.php';

$db = new DB();
$table = Message::find();
unset( $db );

$alerts = Alert::alerts();

include 'views/showMessages.php';