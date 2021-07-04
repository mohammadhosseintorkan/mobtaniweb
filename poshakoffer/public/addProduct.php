<?php
    include '__php__.php';

    $db = new DB();

    if( ! Authorization :: check('UserEdit') ){
        Alert::alerts('شما مجوز افزودن محصول را ندارید!');
        redirect('dashboard.php');
    }

    $imgSrc = assets('images/image.jpg');
    $parameters = $_POST;

    $sizeProduct = '';

        if( isset( $_POST['submit'] ) ){
            if ( Validation::tokenCheck( $_POST['csrf_token'] ) )
            {
                $checkBox = $parameters['sizeProduct'];
                for ($i=0; $i < sizeof($checkBox); $i++) {
                    $sizeProduct .= $checkBox[$i];
                    if ($i < sizeof($checkBox) - 1) {
                        $sizeProduct .= ", ";
                    }
                }

                unset( $parameters['submit'] );
                unset( $parameters['csrf_token'] );

                $parameters['imgSrc'] = $imgSrc;
                $parameters['sizeProduct'] = $sizeProduct;


                $table = Product::add( $parameters );
            }
            else{
                Alert::alerts('دسترسی غیر مجاز!');
                redirect('dashboard.php');
            }
        }

    unset( $db );

    $alerts = Alert::alerts();
    view('addProduct', null, $parameters, $alerts);

