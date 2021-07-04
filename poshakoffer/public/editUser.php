<?php
    include '__php__.php';

    $db = new DB();

    if( ! Authorization :: check('UserEdit') ){
        Alert::alerts('شما مجوز ویرایش کاربر را ندارید!');
        redirect('dashboard.php');
    }

    $imgSrc = assets('images/image.jpg');
    $parameters = $_POST;

    if( isset( $_GET['id'] ) ) {

        if( isset( $_POST['submit'] )){
            if ( Validation::tokenCheck( $_POST['csrf_token'] ) )
            {
                if($_POST['password'] == $_POST['repass']){

                    unset( $parameters['submit'] );
                    unset( $parameters['repass'] );
                    unset( $parameters['csrf_token'] );

                    $parameters['imgSrc'] = $imgSrc;
                    $parameters['id'] = $_GET['id'];

                    $parameters['passwordHash'] = password_hash($parameters['password'], PASSWORD_DEFAULT);
                    unset( $parameters['password'] );

                    $table = User::update( $parameters );
                }else
                    Alert::alerts ('تکرار رمزعبور با رمزعبور مطاقبت ندارد!', 'error');
            }
            else{
                Alert::alerts('دسترسی غیر مجاز!');
                redirect('dashboard.php');
            }
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
