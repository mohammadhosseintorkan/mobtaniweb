<?php
    include '__php__.php';

$db = new DB();

        if( isset( $_POST['submit'] ) ){
            if( ! Authorization :: check('MessageAdd') ){
                Alert::alerts('شما مجوز درج پیام را ندارید!');
                redirect('dashboard.php');
            }
            $parameters = $_POST;

            unset( $parameters['submit'] );

            $table = Message::add( $parameters );

        }

unset( $db );

    $alerts = Alert::alerts();

    include 'views/contact.php';