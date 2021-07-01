<?php
include '__php__.php';

$db = new DB();

if( ! Authorization :: check('ProductDelete') ){
    Alert::alerts('شما مجوز حذف محصول را ندارید!');
    redirect('dashboard.php');
}

    if( isset( $_GET['id'] ) ) {



        $table = Product::delete($_GET['id']);


    }
    else{
        Alert::alerts('شناسه محصول نامشخص!');
    }

unset( $db );

$alerts = Alert::alerts();
include 'views/deleteProduct.php';
