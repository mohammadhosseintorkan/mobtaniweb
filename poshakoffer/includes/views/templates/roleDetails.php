<?php
echo "
			<h2>
				نام نقش: {$role}
			</h2>
			
			<p>
                <span class = 'fw-bold'>مجوز ها:</span><br>
                
                <label class = 'fw-bold'>مجوز های بخش نقش ها:</label>
                <section class='form-check' id='roles'>
                    ";if ($RoleAdd) echo 'افزودن نقش<br>';echo " 
                    ";if ($RoleEdit) echo 'ویرایش نقش<br>';echo "
                    ";if ($RoleDelete) echo 'حذف نقش<br>';echo "
                    ";if ($RoleShow) echo 'مشاهده لیست نقش ها<br>';echo "
                    ";if ($RoleDetails) echo 'مشاهده جزییات نقش ها<br>';echo "
                </section><hr>
                
                <label class = 'fw-bold'>مجوز های بخش محصولات:</label>
                <section class='form-check' id='roles'>
                    ";if ($ProductAdd) echo 'افزودن محصول<br>';echo "
                    ";if ($ProductEdit) echo 'ویرایش محصول<br>';echo "
                    ";if ($ProductDelete) echo 'حذف محصول<br>';echo "
                    ";if ($ProductShow) echo 'مشاهده لیست محصولات<br>';echo "
                    ";if ($ProductDetails) echo 'مشاهده جزییات محصولات<br>';echo "
                    ";if ($ProductEditOther) echo 'ویرایش محصول دیگران<br>';echo "
                    ";if ($ProductDeleteOther) echo 'حذف محصول دیگران<br>';echo "
                    ";if ($ProductDetailsOther) echo 'مشاهده جزییات محصول دیگران<br>';echo "
                </section><hr>
                
                <label class = 'fw-bold'>مجوز های بخش کاربرها:</label>
                <section class='form-check' id='roles'>
                    ";if ($UserAdd) echo 'افزودن کاربر<br>';echo "
                    ";if ($UserEdit) echo 'ویرایش حساب شخصی<br>';echo "
                    ";if ($UserDelete) echo 'حذف حساب شخصی<br>';echo "
                    ";if ($UserShow) echo 'مشاهده لیست کاربران<br>';echo "
                    ";if ($UserDetails) echo 'مشاهده جزییات کاربران<br>';echo "
                    ";if ($UserEditOther) echo 'ویرایش کاربران دیگر<br>';echo "
                    ";if ($UserDeleteOther) echo 'حذف کاربران دیگر<br>';echo "
                    ";if ($UserDetailsOther) echo 'مشاهده جزییات کاربران دیگر<br>';echo "
                </section><hr>
                
                <label class = 'fw-bold'>مجوز های بخش پیام ها:</label>
                <section class='form-check' id='roles'>
                    ";if ($MessageAdd) echo 'افزودن پیام<br>';echo "
                    ";if ($MessageEdit) echo 'ویرایش پیام<br>';echo "
                    ";if ($MessageDelete) echo 'حذف پیام<br>';echo "
                    ";if ($MessageShow) echo 'مشاهده لیست پیام ها<br>';echo "
                    ";if ($MessageDetails) echo 'مشاهده جزییات پیام ها<br>';echo "
                    ";if ($MessageEditOther) echo 'ویرایش پیام دیگران<br>';echo "
                    ";if ($MessageDeleteOther) echo 'حذف پیام دیگران<br>';echo "
                    ";if ($MessageDetailsOther) echo 'مشاهده جزییات پیام دیگران<br>';echo "
                </section>
			</p>
			<hr>
			<section class = 'row container'>
				<span class = 'col'>
				    <a href = 'editRole.php?id={$id}' class = 'btn btn-primary'>ویرایش</a>
                    <a href = 'deleteRole.php?id={$id}' class = 'btn btn-danger'>حذف</a>
				</span>
			</section>";
?>