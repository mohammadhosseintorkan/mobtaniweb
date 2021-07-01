<?php
    include '__php__.php';

    $db = new DB();

    if( ! Authorization :: check('UserEdit') ){
        Alert::alerts('شما مجوز افزودن محصول را ندارید!');
        redirect('dashboard.php');
    }

    $imgSrc = assets('images/image.jpg');

    $sizeProduct = '';

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


            $table = Product::add( $parameters );

        }

    unset( $db );

    $alerts = Alert::alerts();
    include 'views/addProduct.php';
