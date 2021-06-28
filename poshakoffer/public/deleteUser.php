<?php
include '__php__.php';


    if( isset( $_GET['id'] ) ) {

        $db = new DB();

        $table = User::delete($_GET['id']);

        unset( $db );
    }
    else{
        alerts('شناسه کاربر نامشخص!');
    }

$alerts = alerts();
include 'views/deleteUser.php';
//redirect();
