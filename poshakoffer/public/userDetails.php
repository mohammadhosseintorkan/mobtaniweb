<?php
include '__php__.php';

    if ( isset( $_GET['id'] ) ) {
        $db = new DB();
        $id = $_GET['id'];
        $table = user::find("id = $id");
        unset($db);
        $row = $table[0];

        $alerts = Alert::alerts();

        include 'views/userDetails.php';
    }
    else{
        Alert::alerts('شناسه کاربر نامشخص!');
        redirect('showUser.php');
    }