<?php
include '__php__.php';

$db = new DB();

if( ! Authorization :: check('UserDetails') ){
    Alert::alerts('شما مجوز مشاهده جزییات کاربر را ندارید!');
    redirect('dashboard.php');
}

    if ( isset( $_GET['id'] ) ) {

        $id = $_GET['id'];
        $table = user::find("id = $id");

        $row = $table[0];

        $alerts = Alert::alerts();

        include 'views/userDetails.php';
    }
    else{
        Alert::alerts('شناسه کاربر نامشخص!');
        redirect('showUser.php');
    }

unset($db);