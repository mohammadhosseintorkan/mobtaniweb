<?php
include '../includes/settings.php';
include ('../includes/functions.php') ;


    if( isset( $_GET['id'] ) ) {

        $db = new DB();

        $table = Product::delete($_GET['id']);

        unset( $db );
    }
    else{
        alerts('شناسه محصول نامشخص!');
    }

$alerts = alerts();
include '../includes/views/deleteProduct.php';
