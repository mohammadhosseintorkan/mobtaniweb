<?php
session_start();
if(! class_exists('Authentication')) {
	class Authentication{
        static public function login( $uid ){
            $_SESSION['uid'] = $uid;
        }
		
		static public function check(){
			return isset( $_SESSION['uid'] );
		}
		
		static public function logout(){
			unset( $_SESSION['uid'] );
		}
		
		static public function uid(){
			return $_SESSION['uid'];
		}
	}
}