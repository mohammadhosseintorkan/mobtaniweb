<?php
include '__php__.php';

if(! Authentication :: check() ){
    Alert::alerts('ابتدا وارد شوید');
    redirect('login.php?redirect=dashboard.php');
}

$db = new DB();
$table = Message::find();
unset( $db );

$alerts = Alert::alerts();

include 'views/showMessages.php';