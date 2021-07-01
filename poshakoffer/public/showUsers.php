<?php
include '__php__.php';

if(! Authentication :: check() ){
    Alert::alerts('ابتدا وارد شوید');
    redirect('login.php?redirect=dashboard.php');
}

$db = new DB();
$table = User::find();
unset( $db );

$alerts = Alert::alerts();

include 'views/showUsers.php';