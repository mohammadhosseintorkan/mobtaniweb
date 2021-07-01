<?php
	include '__php__.php';
    if( Authentication :: check() ){
        Alert::alerts('قبلا وارد شدید!', 'warning');
        redirect('dashboard.php');
    }

    $parameters = $_POST;
	if( isset( $_POST['submit'] ) ){
		$db = new DB();

        $where = "email = '{$parameters['email']}'";
		$table = User::find( $where );
		if ( isset($table[0]) ){
		    $row = $table[0];

            if( password_verify($parameters['password'], $row['passwordHash']) ){
                Authentication::login($row['id']);

                Alert::alerts("{$row['firstname']} {$row['lastname']} خوش آمدی!", success);

                if (isset($_SESSION['redirect'])) {
                    $redirectAddress = $_SESSION['redirect'];
                    unset($_SESSION['redirect']);
                    redirect($redirectAddress);
                } else
                    redirect('dashboard.php');
            }
            else{
                Alert::alerts('کلمه عبور اشتباه است!');
            }
        }
        else{
            Alert::alerts('نام کاربری اشتباه است!');
        }
		unset( $db );
	}

	$alerts = Alert::alerts();
	view('login', null, $parameters, $alerts);