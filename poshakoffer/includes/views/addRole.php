<!doctype html>
<html lang = "fa" class = "container">
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>محمد حسین ترکان | افزودن نقش</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">

		<link href = "assets/css/style.css" rel = "stylesheet">
	</head>
	<body class = "row gx-10 gy-2"">

        <?php get_header(); ?>

        <main class="container col-12 col-lg-8">

            <?php
                if( isset($alerts) )
                    echo $alerts;
            ?>

			<h1>افزودن نقش</h1>

			<form action = "" method = "post" enctype = "multipart/form-data">
				<h3>مشخصات نقش</h3>

				<label class = 'fw-bold' for = "role">نام نقش</label>
				<section class = "input-group">
					<input type = "text" name = "role" id = "role" placeholder = "برای مثال: کاربر نویسنده" class="form-control" required>
				</section><br>

				<h3>مجوز ها:</h3>

				<section class="form-check" id="roles">

                    <label class = 'fw-bold'>مجوز های بخش نقش ها:</label>
                    <section>
                        <input class="form-check-input" type="checkbox" id="RoleAdd" name="RoleAdd" value="1">
                        <label class="form-check-label" for="RoleAdd">افزودن نقش</label><br>

                        <input class="form-check-input" type="checkbox" id="RoleEdit" name="RoleEdit" value="1">
                        <label class="form-check-label" for="RoleEdit">ویرایش نقش</label><br>

                        <input class="form-check-input" type="checkbox" id="RoleDelete" name="RoleDelete" value="1">
                        <label class="form-check-label" for="RoleDelete">حذف نقش</label><br>

                        <input class="form-check-input" type="checkbox" id="RoleShow" name="RoleShow" value="1">
                        <label class="form-check-label" for="RoleShow">مشاهده لیست نقش ها</label><br>

                        <input class="form-check-input" type="checkbox" id="RoleDetails" name="RoleDetails" value="1">
                        <label class="form-check-label" for="RoleDetails">مشاهده جزییات نقش ها</label><br>
                    </section><hr>

                    <label class = 'fw-bold'>مجوز های بخش محصولات:</label>
                    <section>
                        <input class="form-check-input" type="checkbox" id="ProductAdd" name="ProductAdd" value="1">
                        <label class="form-check-label" for="ProductAdd">افزودن محصول</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductEdit" name="ProductEdit" value="1">
                        <label class="form-check-label" for="ProductEdit">ویرایش محصول</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductDelete" name="ProductDelete" value="1">
                        <label class="form-check-label" for="ProductDelete">حذف محصول</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductShow" name="ProductShow" value="1">
                        <label class="form-check-label" for="ProductShow">مشاهده لیست محصولات</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductDetails" name="ProductDetails" value="1">
                        <label class="form-check-label" for="ProductDetails">مشاهده جزییات محصولات</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductEditOther" name="ProductEditOther" value="1">
                        <label class="form-check-label" for="ProductEditOther">ویرایش محصول دیگران</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductDeleteOther" name="ProductDeleteOther" value="1">
                        <label class="form-check-label" for="ProductDeleteOther">حذف محصول دیگران</label><br>

                        <input class="form-check-input" type="checkbox" id="ProductDetailsOther" name="ProductDetailsOther" value="1">
                        <label class="form-check-label" for="ProductDetailsOther">مشاهده جزییات محصول دیگران</label><br>
                    </section><hr>

                    <label class = 'fw-bold'>مجوز های بخش کاربرها:</label>
                    <section>
                        <input class="form-check-input" type="checkbox" id="UserAdd" name="UserAdd" value="1">
                        <label class="form-check-label" for="UserAdd">افزودن کاربر</label><br>

                        <input class="form-check-input" type="checkbox" id="UserEdit" name="UserEdit" value="1">
                        <label class="form-check-label" for="UserAdd">ویرایش حساب شخصی</label><br>

                        <input class="form-check-input" type="checkbox" id="UserDelete" name="UserDelete" value="1">
                        <label class="form-check-label" for="UserDelete">حذف حساب شخصی</label><br>

                        <input class="form-check-input" type="checkbox" id="UserShow" name="UserShow" value="1">
                        <label class="form-check-label" for="UserShow">مشاهده لیست کاربران</label><br>

                        <input class="form-check-input" type="checkbox" id="UserDetails" name="UserDetails" value="1">
                        <label class="form-check-label" for="UserDetails">مشاهده جزییات کاربران</label><br>

                        <input class="form-check-input" type="checkbox" id="UserEditOther" name="UserEditOther" value="1">
                        <label class="form-check-label" for="UserEditOther">ویرایش کاربران دیگر</label><br>

                        <input class="form-check-input" type="checkbox" id="UserDeleteOther" name="UserDeleteOther" value="1">
                        <label class="form-check-label" for="UserDeleteOther">حذف کاربران دیگر</label><br>

                        <input class="form-check-input" type="checkbox" id="UserDetailsOther" name="UserDetailsOther" value="1">
                        <label class="form-check-label" for="UserDetailsOther">مشاهده جزییات کاربران دیگر</label><br>
                    </section><hr>

                    <label class = 'fw-bold'>مجوز های بخش پیام ها:</label>
                    <section>
                        <input class="form-check-input" type="checkbox" id="MessageAdd" name="MessageAdd" value="1">
                        <label class="form-check-label" for="MessageAdd">افزودن پیام</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageEdit" name="MessageEdit" value="1">
                        <label class="form-check-label" for="MessageEdit">ویرایش پیام</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageDelete" name="MessageDelete" value="1">
                        <label class="form-check-label" for="MessageDelete">حذف پیام</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageShow" name="MessageShow" value="1">
                        <label class="form-check-label" for="MessageShow">مشاهده لیست پیام ها</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageDetails" name="MessageDetails" value="1">
                        <label class="form-check-label" for="MessageDetails">مشاهده جزییات پیام ها</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageEditOther" name="MessageEditOther" value="1">
                        <label class="form-check-label" for="MessageEditOther">ویرایش پیام دیگران</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageDeleteOther" name="MessageDeleteOther" value="1">
                        <label class="form-check-label" for="MessageDeleteOther">حذف پیام دیگران</label><br>

                        <input class="form-check-input" type="checkbox" id="MessageDetailsOther" name="MessageDetailsOther" value="1">
                        <label class="form-check-label" for="MessageDetailsOther">مشاهده جزییات پیام دیگران</label><br>
                    </section>

                </section><br>

				<input type = "submit" name = "submit" value = "افزودن نقش" class="btn btn-primary">
			</form>
		</main>

        <?php get_sidebar(); ?>
        <?php get_footer(); ?>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>