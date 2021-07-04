<?php
include '__php__.php';

$db = new DB();

if( ! Authorization :: check('MessageDelete') ){
    Alert::alerts('شما مجوز حذف پیام را ندارید!');
    redirect('dashboard.php');
}

    if( isset( $_GET['id'] ) ) {

        $table = Message::delete($_GET['id']);

    }
    else{
        Alert::alerts('شناسه پیام نامشخص!');
    }

unset( $db );

$alerts = Alert::alerts();
include 'views/deleteMessage.php';
