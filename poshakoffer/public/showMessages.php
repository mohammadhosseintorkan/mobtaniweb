<?php
include '__php__.php';

$db = new DB();

if( ! Authorization :: check('MessageShow') ){
    Alert::alerts('شما مجوز مشاهده لیست پیام ها را ندارید!');
    redirect('dashboard.php');
}

$table = Message::find();


unset( $db );

$alerts = Alert::alerts();

include 'views/showMessages.php';