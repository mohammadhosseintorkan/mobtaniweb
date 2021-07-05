<?php
    include '__php__.php';

    $db = new DB();

    if( ! Authorization :: check('RoleEdit') ){
        Alert::alerts('شما مجوز ویرایش نقش را ندارید!');
        redirect('dashboard.php');
    }

    if( isset( $_GET['id'] ) ) {
        if (isset($_POST['submit'])) {

            $parameters = $_POST;

            unset($parameters['submit']);

            $table = Role::update($parameters);

        }
        $table = Role::find("id = {$_GET['id']}");
        $row = $table[0];
    }
    else{
        Alert::alerts('شناسه نقش نامشخص!');
    }

    unset( $db );

    $alerts = Alert::alerts();
    view('editRole', null, $row, $alerts);
