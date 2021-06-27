<?php
    include '../includes/settings.php';
    include ('../includes/functions.php') ;

    if ( isset( $_GET['id'] ) ) {
        $db = new DB();
        $id = $_GET['id'];
        $table = Message::find("id = $id");
        unset($db);
        $row = $table[0];

        $alerts = alerts();

        include '../includes/views/messageDetails.php';
    }
    else{
        alerts('شناسه پیام نامشخص!');
        redirect('showMessages.php');
    }