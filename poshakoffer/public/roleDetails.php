<?php
include '__php__.php';

$db = new DB();

if( ! Authorization :: check('RoleDetails') ){
    Alert::alerts('شما مجوز مشاهده جزییات نقش را ندارید!');
    redirect('dashboard.php');
}

    if ( isset( $_GET['id'] ) ) {

        $id = $_GET['id'];
        $table = Role::find("id = $id");

        $row = $table[0];

        $alerts = Alert::alerts();

        view('roleDetails', null, ['row' => $row], $alerts);
    }
    else{
        Alert::alerts('شناسه نقش نامشخص!');
        redirect('showRole.php');
    }

unset($db);