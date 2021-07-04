<?php
include '__php__.php';

$db = new DB();

if( ! Authorization :: check('RoleShow') ){
    Alert::alerts('شما مجوز مشاهده لیست نقش ها را ندارید!');
    redirect('dashboard.php');
}

$table = Role::find();


$alerts = Alert::alerts();

unset( $db );
include 'views/showRoles.php';