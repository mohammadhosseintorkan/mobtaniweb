<?php
include '__php__.php';

if(! Authentication :: check() ){
    Alert::alerts('ابتدا وارد شوید');
    redirect('login.php?redirect=dashboard.php');
}

    if ( isset( $_GET['id'] ) ) {
        $db = new DB();
        $id = $_GET['id'];
        $table = Message::find("id = $id");
        unset($db);
        $row = $table[0];

        $alerts = Alert::alerts();

        include 'views/messageDetails.php';
    }
    else{
        Alert::alerts('شناسه پیام نامشخص!');
        redirect('showMessages.php');
    }