<?php
include '__php__.php';

    if ( isset( $_GET['id'] ) ) {
        $db = new DB();
        $id = $_GET['id'];
        $table = Message::find("id = $id");
        unset($db);
        $row = $table[0];

        $alerts = alerts();

        include 'views/messageDetails.php';
    }
    else{
        alerts('شناسه پیام نامشخص!');
        redirect('showMessages.php');
    }