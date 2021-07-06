<?php
    include '__php__.php';

    $db = new DB();

    if( ! Authorization :: check('ProductEdit') ){
        Alert::alerts('شما مجوز ویرایش محصول را ندارید!');
        redirect('dashboard.php');
    }

    $imgSrc = assets('images/image.jpg');
    $sizeProduct = '';
    $row = '';


    if( isset( $_GET['id'] ) ) {


        if( isset( $_POST['submit'] ) ){


            $parameters = $_POST;

            if ( isset($parameters['sizeProduct']) ) {
                $checkBox = $parameters['sizeProduct'];
                for ($i = 0; $i < sizeof($checkBox); $i++) {
                    $sizeProduct .= $checkBox[$i];
                    if ($i < sizeof($checkBox) - 1) {
                        $sizeProduct .= " | ";
                    }
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
    }
    else{
        Alert::alerts('شناسه محصول نامشخص!');
    }

    unset( $db );

    $alerts = Alert::alerts();
    include 'views/editProduct.php';



/*foreach ($sizeProductArray as $checkValue)
{
$sizeProduct = $row['sizeProduct'];
    $sizeProduct = explode( ' | ', $sizeProduct );
    var_dump($sizeProduct);
    ?>
    <script>
        var sizeProduct = "<?php $checkValue ?> ;"
        document.getElementById(sizeProduct).checked = true;
    </script>
<?php
}*/