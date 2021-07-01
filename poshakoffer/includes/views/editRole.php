<?php
$title ='ویرایش نقش';

if ($RoleAdd)
    $RoleAdd = 'checked';
if ($RoleEdit)
    $RoleEdit = 'checked';
if ($RoleDelete)
    $RoleDelete = 'checked';
if ($RoleShow)
    $RoleShow = 'checked';
if ($RoleDetails)
    $RoleDetails = 'checked';

if ($ProductAdd)
    $ProductAdd = 'checked';
if ($ProductEdit)
    $ProductEdit = 'checked';
if ($ProductDelete)
    $ProductDelete = 'checked';
if ($ProductShow)
    $ProductShow = 'checked';
if ($ProductDetails)
    $ProductDetails = 'checked';
if ($ProductEditOther)
    $ProductEditOther = 'checked';
if ($ProductDeleteOther)
    $ProductDeleteOther = 'checked';
if ($ProductDetailsOther)
    $ProductDetailsOther = 'checked';

if ($UserAdd)
    $UserAdd = 'checked';
if ($UserEdit)
    $UserEdit = 'checked';
if ($UserDelete)
    $UserDelete = 'checked';
if ($UserShow)
    $UserShow = 'checked';
if ($UserDetails)
    $UserDetails = 'checked';
if ($UserEditOther)
    $UserEditOther = 'checked';
if ($UserDeleteOther)
    $UserDeleteOther = 'checked';
if ($UserDetailsOther)
    $UserDetailsOther = 'checked';

if ($MessageAdd)
    $MessageAdd = 'checked';
if ($MessageEdit)
    $MessageEdit = 'checked';
if ($MessageDelete)
    $MessageDelete = 'checked';
if ($MessageShow)
    $MessageShow = 'checked';
if ($MessageDetails)
    $MessageDetails = 'checked';
if ($MessageEditOther)
    $MessageEditOther = 'checked';
if ($MessageDeleteOther)
    $MessageDeleteOther = 'checked';
if ($MessageDetailsOther)
    $MessageDetailsOther = 'checked';


$main = '
        echo <<< EOT
			<h1>افزودن نقش</h1>

			<form action = "" method = "post" enctype = "multipart/form-data">
				<h3>مشخصات نقش</h3>

				<label class = "fw-bold" for = "role">نام نقش</label>
				<section class = "input-group">
					<input type = "text" name = "role" id = "role" placeholder = "برای مثال: کاربر نویسنده" class="form-control" required value = "{$role}">
				</section><br>

				<h3>مجوز ها:</h3>

				<section class="form-check" id="roles">

                    <label class = "fw-bold">مجوز های بخش نقش ها:</label>
                    <section>
                        <input class="form-check-input" type="checkbox" id="RoleAdd" name="RoleAdd" value="1" {$RoleAdd}>
                        <label class="form-check-label" for="RoleAdd">افزودن نقش</label><br>

                        <input class="form-check-input" type="checkbox" id="RoleEdit" name="RoleEdit" value="1" {$RoleEdit}>
                        <label class="form-check-label" for="RoleEdit">ویرایش نقش</label><br>

                        <input class="form-check-input" type="checkbox" id="RoleDelete" name="RoleDelete" value="1" {$RoleDelete}>
                        <label class="form-check-label" for="RoleDelete">حذف نقش</label><br>

                        <input class="form-check-input" type="checkbox" id="RoleShow" name="RoleShow" value="1" {$RoleShow}>
                        <label class="form-check-label" for="RoleShow">مشاهده لیست نقش ها</label><br>

                        <input class="form-check-input" type="checkbox" id="RoleDetails" name="RoleDetails" value="1" {$RoleDetails}>
                        <label class="form-check-label" for="RoleDetails">مشاهده جزییات نقش ها</label><br>
                    </section><hr>

                    <label class = "fw-bold">مجوز های بخش محصولات:</label>
                    <section>
                        <input class="form-check-input" type="checkbox" id="ProductAdd" name="ProductAdd" value="1" {$ProductAdd}>
                        <label class="form-check-label" for="ProductAdd">افزودن محصول</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductEdit" name="ProductEdit" value="1" {$ProductEdit}>
                        <label class="form-check-label" for="ProductEdit">ویرایش محصول</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductDelete" name="ProductDelete" value="1" {$ProductDelete}>
                        <label class="form-check-label" for="ProductDelete">حذف محصول</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductShow" name="ProductShow" value="1" {$ProductShow}>
                        <label class="form-check-label" for="ProductShow">مشاهده لیست محصولات</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductDetails" name="ProductDetails" value="1" {$ProductDetails}>
                        <label class="form-check-label" for="ProductDetails">مشاهده جزییات محصولات</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductEditOther" name="ProductEditOther" value="1" {$ProductEditOther}>
                        <label class="form-check-label" for="ProductEditOther">ویرایش محصول دیگران</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductDeleteOther" name="ProductDeleteOther" value="1" {$ProductDeleteOther}>
                        <label class="form-check-label" for="ProductDeleteOther">حذف محصول دیگران</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductDetailsOther" name="ProductDetailsOther" value="1" {$ProductDetailsOther}>
                        <label class="form-check-label" for="ProductDetailsOther">مشاهده جزییات محصول دیگران</label><br>
                    </section><hr>

                    <label class = "fw-bold">مجوز های بخش کاربرها:</label>
                    <section>
                        <input class="form-check-input" type="checkbox" id="UserAdd" name="UserAdd" value="1" {$UserAdd}>
                        <label class="form-check-label" for="UserAdd">افزودن کاربر</label><br>

                        <input class="form-check-input" type="checkbox" id="UserEdit" name="UserEdit" value="1" {$UserEdit}>
                        <label class="form-check-label" for="UserAdd">ویرایش حساب شخصی</label><br>

                        <input class="form-check-input" type="checkbox" id="UserDelete" name="UserDelete" value="1" {$UserDelete}>
                        <label class="form-check-label" for="UserDelete">حذف حساب شخصی</label><br>

                        <input class="form-check-input" type="checkbox" id="UserShow" name="UserShow" value="1" {$UserShow}>
                        <label class="form-check-label" for="UserShow">مشاهده لیست کاربران</label><br>

                        <input class="form-check-input" type="checkbox" id="UserDetails" name="UserDetails" value="1" {$UserDetails}>
                        <label class="form-check-label" for="UserDetails">مشاهده جزییات کاربران</label><br>

                        <input class="form-check-input" type="checkbox" id="UserEditOther" name="UserEditOther" value="1" {$UserEditOther}>
                        <label class="form-check-label" for="UserEditOther">ویرایش کاربران دیگر</label><br>

                        <input class="form-check-input" type="checkbox" id="UserDeleteOther" name="UserDeleteOther" value="1" {$UserDeleteOther}>
                        <label class="form-check-label" for="UserDeleteOther">حذف کاربران دیگر</label><br>

                        <input class="form-check-input" type="checkbox" id="UserDetailsOther" name="UserDetailsOther" value="1" {$UserDetailsOther}>
                        <label class="form-check-label" for="UserDetailsOther">مشاهده جزییات کاربران دیگر</label><br>
                    </section><hr>

                    <label class = "fw-bold">مجوز های بخش پیام ها:</label>
                    <section>
                        <input class="form-check-input" type="checkbox" id="MessageAdd" name="MessageAdd" value="1" {$MessageAdd}>
                        <label class="form-check-label" for="MessageAdd">افزودن پیام</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageEdit" name="MessageEdit" value="1" {$MessageEdit}>
                        <label class="form-check-label" for="MessageEdit">ویرایش پیام</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageDelete" name="MessageDelete" value="1" {$MessageDelete}>
                        <label class="form-check-label" for="MessageDelete">حذف پیام</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageShow" name="MessageShow" value="1" {$MessageShow}>
                        <label class="form-check-label" for="MessageShow">مشاهده لیست پیام ها</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageDetails" name="MessageDetails" value="1" {$MessageDetails}>
                        <label class="form-check-label" for="MessageDetails">مشاهده جزییات پیام ها</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageEditOther" name="MessageEditOther" value="1" {$MessageEditOther}>
                        <label class="form-check-label" for="MessageEditOther">ویرایش پیام دیگران</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageDeleteOther" name="MessageDeleteOther" value="1" {$MessageDeleteOther}>
                        <label class="form-check-label" for="MessageDeleteOther">حذف پیام دیگران</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageDetailsOther" name="MessageDetailsOther" value="1" {$MessageDetailsOther}>
                        <label class="form-check-label" for="MessageDetailsOther">مشاهده جزییات پیام دیگران</label><br>
                    </section>

                </section><br>

				<input type = "submit" name = "submit" value = "ویرایش نقش" class="btn btn-primary">
			</form>
EOT;
';

include 'templates/master.php';