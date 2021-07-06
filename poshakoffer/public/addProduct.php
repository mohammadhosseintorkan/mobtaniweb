<?php
include '__php__.php';


$parameters = $_POST;
if( isset( $_POST['submit'] ) ){
    if( Validation :: tokenCheck( $_POST['csrf_token'] ) ) {
        unset( $parameters['submit'] );
        unset( $parameters['csrf_token'] );
        $sizeProduct = '';
        $checkBox = $parameters['sizeProduct'];
        for ($i=0; $i < sizeof($checkBox); $i++) {
            $sizeProduct .= $checkBox[$i];
            if ($i < sizeof($checkBox) - 1) {
                $sizeProduct .= " | ";
            }
        }

        $imgSrc = assets('images/image.jpg');


        $parameters['imgSrc'] = $imgSrc;
        $parameters['sizeProduct'] = $sizeProduct;

        $form = new AddProduct( $parameters );
        if( $form -> valid ){
            // B. Insert in DB
            $db = new DB();
            Product::add( $parameters );
            unset( $db );
        }
        else
            Alert::alerts('خطا در درج!');


    }
    else{
        Alert::alerts('دسترسی غیر مجاز!');
        redirect('dashboard.php');
    }
}
else
    $form = new AddProduct();

$alerts = Alert::alerts();

view('addProduct', null, ['form' => $form], $alerts);









/*    include '__php__.php';

    if( ! Authorization :: check('UserEdit') ){
        Alert::alerts('شما مجوز افزودن محصول را ندارید!');
        redirect('dashboard.php');
    }
    $parameters = $_POST;

        if( isset( $_POST['submit'] ) ){
            if ( Validation::tokenCheck( $_POST['csrf_token'] ) )
            {
                unset( $parameters['submit'] );
                unset( $parameters['csrf_token'] );
                $sizeProduct = '';
                $checkBox = $parameters['sizeProduct'];
                for ($i=0; $i < sizeof($checkBox); $i++) {
                    $sizeProduct .= $checkBox[$i];
                    if ($i < sizeof($checkBox) - 1) {
                        $sizeProduct .= " | ";
                    }
                }
                $imgSrc = assets('images/image.jpg');

                $parameters['imgSrc'] = $imgSrc;
                $parameters['sizeProduct'] = $sizeProduct;


                $form = new AddProduct( $parameters );
                if ( $form -> valid ){
                    $db = new DB();
                    Product::add( $parameters );
                    unset( $db );
                }
                else
                    Alert::alerts('خطا در درج!');

            }
            else{
                Alert::alerts('دسترسی غیر مجاز!');
                redirect('dashboard.php');
            }
        }
        else
            $form = new AddProduct();



    $alerts = Alert::alerts();
    view('addProduct', null, ['$form' => $form], $alerts);
*/
