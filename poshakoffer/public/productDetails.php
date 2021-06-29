<?php
include '__php__.php';

    if ( isset( $_GET['id'] ) ) {
        $db = new DB();
        $id = $_GET['id'];
        $table = Product::find("id = $id");
        unset($db);
        $row = $table[0];

        $alerts = Alert::alerts();

        include 'views/productDetails.php';
    }
    else{
        Alert::alerts('شناسه محصول نامشخص!');
        redirect('catalog.php');
    }