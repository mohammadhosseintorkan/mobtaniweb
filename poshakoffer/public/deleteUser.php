<?php
include '__php__.php';

$db = new DB();

if( ! Authorization :: check('UserDelete') ){
    Alert::alerts('شما مجوز حذف کاربر را ندارید!');
    redirect('dashboard.php');
}

    if( isset( $_GET['id'] ) ) {


        $table = User::delete($_GET['id']);
        redirect('showUsers.php');

    }
    else{
        Alert::alerts('شناسه کاربر نامشخص!');
    }

unset( $db );

$alerts = Alert::alerts();
//redirect();
