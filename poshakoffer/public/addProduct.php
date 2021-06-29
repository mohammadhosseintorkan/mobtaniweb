<?php
include '__php__.php';

$imgSrc = assets('images/image.jpg');

$sizeProduct = '';

    if( isset( $_POST['submit'] ) ){
        $db = new DB();

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


        $table = Product::add( $parameters );
        unset( $db );
    }

$alerts = Alert::alerts();
include 'views/addProduct.php';
