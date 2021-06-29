<?php
include '__php__.php';

$imgSrc = assets('images/image.jpg');
$sizeProduct = '';


if( isset( $_GET['id'] ) ) {

    $db = new DB();

    if( isset( $_POST['submit'] ) ){


        $parameters = $_POST;


        $checkBox = $parameters['sizeProduct'];
        for ($i=0; $i < sizeof($checkBox); $i++) {
            $sizeProduct .= $checkBox[$i];
            if ($i < sizeof($checkBox) - 1) {
                $sizeProduct .= ", ";
            }
        }

        unset( $parameters['submit'] );

        $parameters['imgSrc'] = $imgSrc;
        $parameters['sizeProduct'] = $sizeProduct;
        $parameters['id'] = $_GET['id'];


        $table = Product::update( $parameters );
    }

    $table = Product::find("id = {$_GET['id']}");
    $row = $table[0];

    unset( $db );

}
else{
    Alert::alerts('شناسه محصول نامشخص!');
}

$alerts = Alert::alerts();
include 'views/editProduct.php';
