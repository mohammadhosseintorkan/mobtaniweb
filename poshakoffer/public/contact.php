<?php
    include '__php__.php';

$db = new DB();

/* if( ! Authorization :: check('MessageAdd') ){
    Alert::alerts('شما مجوز درج پیام را ندارید!');
    redirect('dashboard.php');
}*/
$parameters = $_POST;

        if( isset( $_POST['submit'] ) ){
            if ( Validation::tokenCheck( $_POST['csrf_token'] ) )
            {
                unset( $parameters['submit'] );
                unset( $parameters['csrf_token'] );

                $table = Message::add( $parameters );
            }
            else{
                Alert::alerts('دسترسی غیر مجاز!');
                redirect('dashboard.php');
            }
        }

unset( $db );

$alerts = Alert::alerts();
view('contact', null, $parameters, $alerts);