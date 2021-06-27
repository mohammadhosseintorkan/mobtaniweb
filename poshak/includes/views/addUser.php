<html lang = "fa">
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>محمد حسین ترکان | ثبت نام</title>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
		
		<link href = "assets/css/style.css" rel = "stylesheet">
	</head>
	<body class = "container">
		<header></header>
		<main>

            <?php
                if( isset($alerts) )
                    echo $alerts;
            ?>

			<h1>ثبت نام</h1>
			
			<form action = "" method = "post" enctype = "multipart/form-data">
				<h3>مشخصات فردی</h3><br>

                <label for = "firstname">نام و نام خانوادگی : </label>
				<section class = "input-group">
						<input type = "text" name = "firstname" id = "firstname" placeholder = "نام" class="form-control" required>
						<input type = "text" name = "lastname" id = "lastname" placeholder = "نام خانوادگی" class="form-control" required>
				</section><br>
				
				<label for = "mobile">شماره موبایل</label>
				<section class = "input-group">
						<input type = "number" name = "mobile" id = "mobile" class="form-control" required>
				</section><br>
				
				<label for = "email">پست الکترونیکی</label>
				<section class = "input-group">
						<input type = "email" name = "email" id = "email" class="form-control" required>
				</section><br>
				
				<h3>مشخصات حساب کاربری</h3>
				
				<label for = "username">نام کاربری</label>
				<section class = "input-group">
						<input type = "text" name = "username" id = "username" class="form-control" required>
				</section><br>
				
				<label for = "pass">رمز عبور</label>
				<section class = "input-group">
						<input type = "password" name = "pass" id = "pass" class="form-control" required>
				</section><br>
				
				<label for = "repass">تکرار رمز عبور</label>
				<section class = "input-group">
						<input type = "password" name = "repass" id = "repass" class="form-control" required>
				</section><br>
				
				<input type = "submit" name = "submit" value = "ثبت نام" class="btn btn-primary">
                <a href = "login.php" class = "btn btn-link">وارد شوید</a>
			</form>
		</main>
		<aside></aside>
		<footer></footer>
		
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>