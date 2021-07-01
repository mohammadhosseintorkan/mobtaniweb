<?php
$title = 'ثبت نام';
$main = '
			    echo <<< EOT
			<h1>ثبت نام</h1>
			
			<form action = "" method = "post" enctype = "multipart/form-data">
				<h3>مشخصات فردی</h3><br>

                <label for = "firstname">نام و نام خانوادگی : </label>
				<section class = "input-group">
						<input type = "text" name = "firstname" id = "firstname" placeholder = "نام" class="form-control" required value="
EOT;
                if( isset($firstname) ) echo $firstname;
                echo <<< EOT
">
						<input type = "text" name = "lastname" id = "lastname" placeholder = "نام خانوادگی" class="form-control" required value="
EOT;
                if( isset($lastname) ) echo $lastname;
                echo <<< EOT
">
				</section><br>
				
				<label for = "mobile">شماره موبایل</label>
				<section class = "input-group">
						<input type = "number" name = "mobile" id = "mobile" class="form-control" required value="
EOT;
                if( isset($mobile) ) echo $mobile;
                echo <<< EOT
">
				</section><br>
				
				<label for = "email">پست الکترونیکی</label>
				<section class = "input-group">
						<input type = "email" name = "email" id = "email" class="form-control far fa-eye" required value="
EOT;
                if( isset($email) ) echo $email;
                echo <<< EOT
">
				</section><br>
				
				<h3>مشخصات حساب کاربری</h3>
				
				<label for = "username">نام کاربری</label>
				<section class = "input-group">
						<input type = "text" name = "username" id = "username" class="form-control" required value="
EOT;
                if( isset($username) ) echo $username;
                echo <<< EOT
">
				</section><br>
				
				<label for = "pass">رمز عبور</label>
				<section class = "input-group">
						<input type = "password" name = "password" id = "password" class="form-control" required>
				</section><br>
				
				<label for = "repass">تکرار رمز عبور</label>
				<section class = "input-group">
						<input type = "password" name = "repass" id = "repass" class="form-control" required>
				</section><br>
				
				<input type = "submit" name = "submit" value = "ثبت نام" class="btn btn-primary">
                <a href = "login.php" class = "btn btn-link">وارد شوید</a>
			</form>
EOT;
';
include 'templates/master.php';