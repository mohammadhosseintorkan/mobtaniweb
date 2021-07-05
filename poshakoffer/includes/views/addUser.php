<?php
$title = 'ثبت نام';
$form = new Form();
$form -> textbox('نام', 'firstname', null, null, 'required');
$form -> textbox('نام خانوادگی', 'lastname', null, null, 'required');
$form -> number('شماره موبایل', 'mobile', null, null, 'required');
$form -> email('ایمیل');
$form -> textbox('نام کاربری', 'username', null, null, 'required');
$form -> password('کلمه عبور', null, null, 'حداقل 8 کاراکتر<br> حروف و اعداد و کاراکترهای ویژه', 'required');
$form -> password('تکرار کلمه عبور', 'repass');
$main = '
		echo <<< EOT
		    <h1>ثبت نام</h1>
				<h3>مشخصات حساب کاربری</h3>
                $form
EOT;
';


include 'templates/master.php';




/*<a href = "login.php" class = "btn btn-link">وارد شوید</a> */