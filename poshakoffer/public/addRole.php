<?php
    include '__php__.php';

    $db = new DB();

    if( ! Authorization :: check('RoleAdd') ){
        Alert::alerts('شما مجوز افزودن نقش را ندارید!');
        redirect('dashboard.php');
    }


        if( isset( $_POST['submit'] ) ){


            $parameters = $_POST;

            unset( $parameters['submit'] );

            $table = Role::add( $parameters );

        }

    unset( $db );

    $alerts = Alert::alerts();
    include 'views/addRole.php';
