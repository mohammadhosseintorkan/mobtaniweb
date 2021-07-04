<?php
include '__php__.php';

$db = new DB();

if( ! Authorization :: check('UserShow') ){
    Alert::alerts('شما مجوز مشاهده لیست کاربران را ندارید!');
    redirect('dashboard.php');
}

$table = User::find();


$alerts = Alert::alerts();

unset( $db );
include 'views/showUsers.php';