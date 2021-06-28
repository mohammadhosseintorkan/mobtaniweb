<?php
include '__php__.php';

    if( isset( $_GET['id'] ) ) {

        $db = new DB();

        $table = Message::delete($_GET['id']);

        unset( $db );
    }
    else{
        alerts('شناسه پیام نامشخص!');
    }

$alerts = alerts();
include 'views/deleteMessage.php';
