<?php
include '__php__.php';

$db = new DB();

if( ! Authorization :: check('MessageDetails') ){
    Alert::alerts('شما مجوز مشاهده جزییات پیام را ندارید!');
    redirect('dashboard.php');
}

    if ( isset( $_GET['id'] ) ) {

        $id = $_GET['id'];
        $table = Message::find("id = $id");

        $row = $table[0];

        $alerts = Alert::alerts();

        include 'views/messageDetails.php';
    }
    else{
        Alert::alerts('شناسه پیام نامشخص!');
        redirect('showMessages.php');
    }

unset($db);