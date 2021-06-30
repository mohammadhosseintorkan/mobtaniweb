<?php
include '__php__.php';

if(! Authentication :: check() ){
    Alert::alerts('ابتدا وارد شوید');
    redirect('login.php?redirect=dashboard.php');
}

    if( isset( $_GET['id'] ) ) {

        $db = new DB();

        $table = User::delete($_GET['id']);

        unset( $db );
    }
    else{
        Alert::alerts('شناسه کاربر نامشخص!');
    }

$alerts = Alert::alerts();
include 'views/deleteUser.php';
//redirect();
