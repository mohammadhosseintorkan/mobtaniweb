<?php
    include '__php__.php';

    $db = new DB();

    if( ! Authorization :: check('UserEdit') ){
        Alert::alerts('شما مجوز ویرایش کاربر را ندارید!');
        redirect('dashboard.php');
    }

    $imgSrc = assets('images/image.jpg');


    if( isset( $_GET['id'] ) ) {

        if( isset( $_POST['submit'] )){

            if($_POST['password'] == $_POST['repass']){

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

    }
    else{
        Alert::alerts('شناسه کاربر نامشخص!');
    }

    unset( $db );

    $alerts = Alert::alerts();
    view('editUser', null, $row, $alerts);
