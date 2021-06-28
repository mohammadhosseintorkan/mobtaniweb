<?php
include '__php__.php';

    if( isset( $_GET['id'] ) ) {

        $db = new DB();

        $table = Product::delete($_GET['id']);

        unset( $db );
    }
    else{
        alerts('شناسه محصول نامشخص!');
    }

$alerts = alerts();
include 'views/deleteProduct.php';
