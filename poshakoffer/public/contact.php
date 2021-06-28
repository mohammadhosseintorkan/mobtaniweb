<?php
    include '__php__.php';

        if( isset( $_POST['submit'] ) ){
            $db = new DB();

            $parameters = $_POST;

            unset( $parameters['submit'] );

            $table = Message::add( $parameters );
            unset( $db );

        }

    $alerts = alerts();

    include 'views/contact.php';