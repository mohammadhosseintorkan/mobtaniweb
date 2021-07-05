<?php
if(! class_exists('Validation')) {
	class Validation{
		public static function tokenGenerator( $length = 20 ){
			return bin2hex( random_bytes( $length ) );
		}

        public static function tokenCheck( $token, $name = 'csrf_token' ){
            if ( isset($_SESSION[$name]) )
                return $_SESSION[$name] === $token;
            return false;
        }

        public static function price( $string ){
		    return
            filter_var($string, FILTER_VALIDATE_INT, array("options" => array("min_range" => 0)) !== false && intval($string) % 1000 === 0);
        }
	}
}