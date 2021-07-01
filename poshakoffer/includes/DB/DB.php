<?php

include 'Table.php';
include 'Product.php';
include 'Message.php';
include 'User.php';


if(! class_exists('DB')) {
	class DB{
		private $dbc;
        public function __construct( $selectDB = true){
			$this -> connect();
			if($selectDB)
			    $this -> selectDB();
			$this -> dbc -> set_charset( CHARSET );
		}

        private function connect(){
			$this -> dbc = new mysqli(DBHOST, DBUSER, DBPASS);
			if( $this -> dbc -> connect_error ){
				$error = "
						خطا در اتصال به دیتابیس!
						<section lang = 'en'>{$this -> dbc -> connect_error}</section>";
				die( $error );
			}
		}
        private function selectDB(){
			$this -> dbc -> select_db(DBNAME);
			if( $this -> dbc -> error ){
				$error = "
						خطا در انتخاب دیتابیس!
						<section lang = 'en'>{$this -> dbc -> error}</section>";
				die( $error );
			}
		}

        public function execute( $sql, $params = false ){
			$result = $this -> dbc -> query( $sql );

			if( $this -> dbc -> error ){
				$error = "
						خطا در اجرای کوئری!
						<section lang = 'en'>{$sql}<br>
						{$this -> dbc -> error}</section>";
				die( $error );
				return false;
			}
			else{
                if ( $result !== TRUE && $result !== FALSE ){
                    $table = $result -> fetch_all( MYSQLI_ASSOC );
                    return $table;
                }
                else{
                    if ( isset($this -> dbc -> insert_id) ){
                        return  $this -> dbc -> insert_id;
                    }
                    else
                        return $result;
                }
            }
		}

        public function __destruct(){
			$this -> dbc -> close();
		}
	}
}
