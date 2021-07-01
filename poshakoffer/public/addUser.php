<?php
include '__php__.php';

$imgSrc = assets('images/null.jpg');
$parameters = $_POST;

    if( isset( $_POST['submit'] )){

        if($_POST['password'] == $_POST['repass']){
            $db = new DB();

            $where = "email = '{$_POST['email']}'";
            $table = User::find($where);
            if ( ! isset($table[0]) ) {
                // ثبت نام

                unset($parameters['submit']);
                unset($parameters['repass']);

                $parameters['imgSrc'] = $imgSrc;

                $parameters['passwordHash'] = password_hash($parameters['password'], PASSWORD_DEFAULT);
                unset( $parameters['password'] );

                $uid = User::add($parameters);
                // لاگین
                Authentication::login( $uid );

                Alert::alerts("{$parameters['firstname']} {$parameters['lastname']} خوش آمدی!", success);

                if ( isset($_SESSION['redirect']) ) {
                    $redirectAddress = $_SESSION['redirect'];
                    unset( $_SESSION['redirect'] );
                    redirect( $redirectAddress );
                }
                else
                    redirect('dashboard.php');
            }
            else{
                Alert::alerts('این ایمیل از قبل وجود دارد!');
            }
            unset( $db );
        }else
            Alert::alerts ('تکرار رمزعبور با رمزعبور مطاقبت ندارد!', 'error');

    }

$alerts = Alert::alerts();
view('addUser', null, $parameters, $alerts);
