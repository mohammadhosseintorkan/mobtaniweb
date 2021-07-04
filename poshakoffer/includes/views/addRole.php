<?php
$title = 'ثبت نام';
$form = new Form();
$form -> textbox('نام نقش', 'role', null, null, 'required');
$form -> switche('افزودن نقش', 'RoleAdd', '1', null, null);
$form -> switche('ویرایش نقش', 'RoleEdit', '1', null, null);
$form -> switche('حذف نقش', 'RoleDelete', '1', null, null);
$form -> switche('مشاهده لیست نقش ها', 'RoleShow', '1', null, null);
$form -> switche('مشاهده جزییات نقش ها', 'RoleDetails', '1', null, null);
$form -> switche('افزودن محصول', 'ProductAdd', '1', null, null);
$form -> switche('ویرایش محصول', 'ProductEdit', '1', null, null);
$form -> switche('حذف محصول', 'ProductDelete', '1', null, null);
$form -> switche('مشاهده لیست محصولات', 'ProductShow', '1', null, null);
$form -> switche('مشاهده جزییات محصولات', 'ProductDetails', '1', null, null);
$form -> switche('ویرایش محصول دیگران', 'ProductEditOther', '1', null, null);
$form -> switche('حذف محصول دیگران', 'ProductDeleteOther', '1', null, null);
$form -> switche('مشاهده جزییات محصول دیگران', 'ProductDetailsOther', '1', null, null);
$form -> switche('افزودن کاربر', 'UserAdd', '1', null, null);
$form -> switche('ویرایش حساب شخصی', 'UserEdit', '1', null, null);
$form -> switche('حذف حساب شخصی', 'UserDelete', '1', null, null);
$form -> switche('مشاهده لیست کاربران', 'UserShow', '1', null, null);
$form -> switche('مشاهده جزییات کاربران', 'UserDetails', '1', null, null);
$form -> switche('ویرایش کاربران دیگر', 'UserEditOther', '1', null, null);
$form -> switche('حذف کاربران دیگر', 'UserDeleteOther', '1', null, null);
$form -> switche('مشاهده جزییات کاربران دیگر', 'UserDetailsOther', '1', null, null);
$form -> switche('افزودن پیام', 'MessageAdd', '1', null, null);
$form -> switche('ویرایش پیام', 'MessageEdit', '1', null, null);
$form -> switche('حذف پیام', 'MessageDelete', '1', null, null);
$form -> switche('مشاهده لیست پیام ها', 'MessageShow', '1', null, null);
$form -> switche('مشاهده جزییات پیام ها', 'MessageDetails', '1', null, null);
$form -> switche('ویرایش پیام دیگران', 'MessageEditOther', '1', null, null);
$form -> switche('حذف پیام دیگران', 'MessageDeleteOther', '1', null, null);
$form -> switche('مشاهده جزییات پیام دیگران', 'MessageDetailsOther', '1', null, null);
$main = '
		echo <<< EOT
            <h1>افزودن نقش</h1>
				<h3>مشخصات نقش و مجوز های آن</h3>
				$form
EOT;
';


include 'templates/master.php';