<?php	
if( ! defined('SITE_PATH') )
	define( 'SITE_PATH', __DIR__ );
if( ! defined('INC_PATH') )
	define( 'INC_PATH', SITE_PATH.'/includes/' );

set_include_path(INC_PATH);
include 'initializer.php';

if( ! defined('SITE_URL') )
    define( 'SITE_URL', '/poshakoffer/public/' );
if( ! defined('ASSETS_URL') )
    define( 'ASSETS_URL', '/poshakoffer/public/assets/' );
function assets( $address ){
    return ASSETS_URL . $address;
}