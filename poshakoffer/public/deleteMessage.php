<?php
include '__php__.php';

    if( isset( $_GET['id'] ) ) {

        $db = new DB();

        $table = Message::delete($_GET['id']);

        unset( $db );
    }
    else{
        Alert::alerts('شناسه پیام نامشخص!');
    }

$alerts = Alert::alerts();
include 'views/deleteMessage.php';
