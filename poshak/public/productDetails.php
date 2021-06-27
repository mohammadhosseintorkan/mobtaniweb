<?php
    include '../includes/settings.php';
    include ('../includes/functions.php') ;

    if ( isset( $_GET['id'] ) ) {
        $db = new DB();
        $id = $_GET['id'];
        $table = Product::find("id = $id");
        unset($db);
        $row = $table[0];

        $alerts = alerts();

        include '../includes/views/productDetails.php';
    }
    else{
        alerts('شناسه محصول نامشخص!');
        redirect('catalog.php');
    }