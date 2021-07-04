<?php
$title ='ویرایش کاربر';
$form = new Form();
$form -> textbox('نام', 'firstname', "{$firstname}", null, 'required');
$form -> textbox('نام خانوادگی', 'lastname', "{$lastname}", null, 'required');
$form -> date('تاریخ تولد', 'birthday', "{$birthday}", null);
$form -> numberbox('شماره موبایل', 'mobile', "{$mobile}", null, '0', null, 'required');
$form -> email('ایمیل', null, "{$email}", null, 'required');
$form -> textbox('نام کاربری', 'username', "{$username}", null, 'required');
$form -> password('کلمه عبور', null, null, 'حداقل 8 کاراکتر<br> حروف و اعداد و کاراکترهای ویژه', 'required');
$form -> password('تکرار کلمه عبور', 'repass');
$form -> image('تصویر کاربر', 'userPicture');
$main = '
		echo <<< EOT
		    <h1>ویرایش کاربر</h1>
                <h3>مشخصات حساب کاربری</h3>
                $form

EOT;
';

include 'templates/master.php';