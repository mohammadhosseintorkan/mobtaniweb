<?php
	if(! class_exists('Register')) {
		class Register extends Form {
			public function __construct(){
                $this -> textbox('نام', 'firstname', null, null, 'required');
                $this -> textbox('نام خانوادگی', 'lastname', null, null, 'required');
                $this -> number('شماره موبایل', 'mobile', 0, null, null, 'required');
                $this -> email('ایمیل');
                $this -> textbox('نام کاربری', 'username', null, null, 'required');
                $this -> password('کلمه عبور', null, null, 'حداقل 8 کاراکتر<br> حروف و اعداد و کاراکترهای ویژه', 'required');
                $this -> password('تکرار کلمه عبور', 'repass', null, null, 'required');
			}
		}
	}
?>