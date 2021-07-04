<?php
    include '__php__.php';

    $db = new DB();

    if( ! Authorization :: check('RoleAdd') ){
        Alert::alerts('شما مجوز افزودن نقش را ندارید!');
        redirect('dashboard.php');
    }

    $parameters = $_POST;

        if( isset( $_POST['submit'] ) ){
            if ( Validation::tokenCheck( $_POST['csrf_token'] ) )
            {
                unset( $parameters['submit'] );
                unset( $parameters['csrf_token'] );

                $table = Role::add( $parameters );
            }
            else{
                Alert::alerts('دسترسی غیر مجاز!');
                redirect('dashboard.php');
            }
        }

    unset( $db );

    $alerts = Alert::alerts();
    include 'views/addRole.php';
