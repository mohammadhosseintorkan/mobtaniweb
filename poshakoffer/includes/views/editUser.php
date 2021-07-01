<?php
$title ='ویرایش کاربر';
$main = '
		echo <<< EOT
		    <h1>ویرایش کاربر</h1>

            <form action = "" method = "post" enctype = "multipart/form-data">
                <h3>مشخصات فردی</h3><br>
        
                <label for = "firstname">نام و نام خانوادگی : </label>
                <section class = "input-group">
                    <input type = "text" name = "firstname" id = "firstname" placeholder = "نام" class="form-control" required value = "{$firstname}">
                    <input type = "text" name = "lastname" id = "lastname" placeholder = "نام خانوادگی" class="form-control" required value = "{$lastname}">
                </section><br>
        
                <label for = "birthday">تاریخ تولد</label>
                <section class = "input-group">
                    <input type = "date" name = "birthday" id = "birthday" class="form-control" required value = "{$birthday}">
                </section><br>
        
                <label for = "mobile">شماره موبایل</label>
                <section class = "input-group">
                    <input type = "number" name = "mobile" id = "mobile" class="form-control" required value = "{$mobile}">
                </section><br>

                <label for = "email">پست الکترونیکی</label>
                <section class = "input-group">
                    <input type = "email" name = "email" id = "email" class="form-control" required value = "{$email}">
                </section><br>

                <h3>مشخصات حساب کاربری</h3>

                <label for = "username">نام کاربری</label>
                <section class = "input-group">
                    <input type = "text" name = "username" id = "username" class="form-control" required value = "{$username}">
                </section><br>

                <label for = "pass">رمز عبور</label>
                <section class = "input-group">
                    <input type = "password" name = "password" id = "password" class="form-control" required>
                </section><br>

                <label for = "repass">تکرار رمز عبور</label>
                <section class = "input-group">
                    <input type = "password" name = "repass" id = "repass" class="form-control" required>
                </section><br>

                <label for = "file">تصویر کاربر</label>
                <section class = "input-group">
                    <input type = "file" name = "userPicture" id = "file" class="form-control"><br>
                </section><br>

                <input type = "submit" name = "submit" value = "ویرایش" class="btn btn-primary">
            </form>

EOT;
';

include 'templates/master.php';