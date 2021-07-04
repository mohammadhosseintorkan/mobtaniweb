<?php
include '__php__.php';

$db = new DB();

if( ! Authorization :: check('RoleDelete') ){
    Alert::alerts('شما مجوز حذف نقش را ندارید!');
    redirect('dashboard.php');
}

    if( isset( $_GET['id'] ) ) {


        $table = Role::delete($_GET['id']);
        redirect('showRoles.php');

    }
    else{
        Alert::alerts('شناسه نقش نامشخص!');
    }

unset( $db );

$alerts = Alert::alerts();
//redirect();
