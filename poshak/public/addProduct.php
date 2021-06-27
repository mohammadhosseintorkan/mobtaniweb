<?php
include '../includes/settings.php';
include ('../includes/functions.php') ;
$imgSrc = 'assets/images/image.jpg';
$alert = '';
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

$alerts = alerts();
include '../includes/views/addProduct.php';
