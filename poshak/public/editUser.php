<?php
    include '../includes/settings.php';
    include '../includes/functions.php';
    $imgSrc = 'assets/images/image.jpg';


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
                alerts ('تکرار رمزعبور با رمزعبور مطاقبت ندارد!', 'error');
        }

        $table = User::find("id = {$_GET['id']}");
        $row = $table[0];

        unset( $db );
    }
    else{
        alerts('شناسه کاربر نامشخص!');
    }

    $alerts = alerts();
    include '../includes/views/editUser.php';
