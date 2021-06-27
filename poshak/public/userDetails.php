<?php
    include '../includes/settings.php';
    include ('../includes/functions.php') ;

    if ( isset( $_GET['id'] ) ) {
        $db = new DB();
        $id = $_GET['id'];
        $table = user::find("id = $id");
        unset($db);
        $row = $table[0];

        $alerts = alerts();

        include '../includes/views/userDetails.php';
    }
    else{
        alerts('شناسه کاربر نامشخص!');
        redirect('showUser.php');
    }