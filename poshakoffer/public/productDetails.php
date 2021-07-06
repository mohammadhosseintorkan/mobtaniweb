<?php
include '__php__.php';

$db = new DB();

if( ! Authorization :: check('ProductDetails') ){
    Alert::alerts('شما مجوز مشاهده جزییات محصول را ندارید!');
    redirect('dashboard.php');
}

    if ( isset( $_GET['id'] ) ) {

        $id = $_GET['id'];
        $table = Product::find("id = $id");

        $row = $table[0];

        $alerts = Alert::alerts();

        view('productDetails', null, ['row' => $row], $alerts);
    }
    else{
        Alert::alerts('شناسه محصول نامشخص!');
        redirect('catalog.php');
    }

unset($db);