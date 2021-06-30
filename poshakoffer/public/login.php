<?php
	include '__php__.php';

    $parameters = $_POST;
	if( isset( $_POST['submit'] ) ){
		$db = new DB();

        $where = "email = '{$parameters['email']}' AND password = '{$parameters['password']}'";
		$table = User::find( $where );
		if ( isset($table[0])){
		    $row = $table[0];
		    Authentication::login( $row['id'] );

            Alert::alerts("{$row['firstname']} {$row['lastname']} خوش آمدی!", success);
            redirect('dashboard.php');
        }
		else{
            Alert::alerts('نام کاربری/کلمه عبور اشتباه است!');
        }
		unset( $db );
	}

	$alerts = Alert::alerts();
	view('login', null, $parameters, $alerts);