<?php
include '__php__.php';

$imgSrc = assets('images/null.jpg');

    if( isset( $_POST['submit'] )){

        if($_POST['pass'] == $_POST['repass']){
            $db = new DB();

            $parameters = $_POST;

            unset( $parameters['submit'] );
            unset( $parameters['repass'] );

            $parameters['imgSrc'] = $imgSrc;

            $table = User::add( $parameters );
            unset( $db );


        }else
            Alert::alerts ('تکرار رمزعبور با رمزعبور مطاقبت ندارد!', 'error');

    }

$alerts = Alert::alerts();
include 'views/addUser.php';
