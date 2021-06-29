<?php
include '__php__.php';

    $imgSrc = assets('images/image.jpg');


if( isset( $_GET['id'] ) ) {

        $db = new DB();

        if( isset( $_POST['submit'] )){

            if($_POST['pass'] == $_POST['repass']){

                $parameters = $_POST;

                unset( $parameters['submit'] );
                unset( $parameters['repass'] );

                $parameters['imgSrc'] = $imgSrc;
                $parameters['id'] = $_GET['id'];

                $table = User::update( $parameters );
            }else
                Alert::alerts ('تکرار رمزعبور با رمزعبور مطاقبت ندارد!', 'error');
        }

        $table = User::find("id = {$_GET['id']}");
        $row = $table[0];

        unset( $db );
    }
    else{
        Alert::alerts('شناسه کاربر نامشخص!');
    }

    $alerts = Alert::alerts();
    include 'views/editUser.php';
