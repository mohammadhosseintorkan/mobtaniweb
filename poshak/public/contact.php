<?php
include '../includes/settings.php';
include ('../includes/functions.php') ;
$alert = '';

    if( isset( $_POST['submit'] ) ){
        $db = new DB();

        $parameters = $_POST;

        unset( $parameters['submit'] );

        $table = Message::add( $parameters );
        unset( $db );

    }


$alerts = alerts();
include '../includes/views/contact.php';