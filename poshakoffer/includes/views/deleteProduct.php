<html lang = "fa">
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>محمد حسین ترکان | ویرایش محصول</title>
		
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

			<h1>ویرایش محصول</h1>
			
			<form action = "" method = "post" enctype = "multipart/form-data">
				<h3>مشخصات محصول</h3>
				
				<label for = "name">نام محصول</label>
				<section class = "input-group">
					<input type = "text" name = "name" id = "name" class="form-control" required value = "<?php if( isset($row['name']) ) echo $row['name']; ?>">
				</section>
				
				<label for = "price">قیمت</label>
				<span class = "input-group">
					<input type = "number" name = "price" id = "price" class="form-control" min = "0" step = "1000" required value = "<?php if( isset($row['price']) ) echo $row['price']; ?>">
					<span class = "input-group-text">تومان</span>
				</span><br>
				
				<label for = "file">تصویر محصول</label>
				<input type = "file" name = "productPicture" id = "file" class="form-control"><br>
				
				<h3>ویژگی ها</h3>
				
				<label for = "typeProduct">نوع محصول</label>
				<select name = "typeProduct" id = "typeProduct" class="form-control" onselect="<?php if( isset($row['typeProduct']) ) echo $row['typeProduct']; ?>">
					<optgroup label="مردانه">
						<option value = "MTshirt">تی شرت</option>
						<option value = "Shirt">پیراهن</option>
						<option value = "MPants">شلوار</option>
					</optgroup>
					<optgroup label="زنانه">
						<option value = "mantle">مانتو</option>
						<option value = "blouse">بلوز و شومیز</option>
						<option value = "WTshirt">تی شرت</option>
						<option value = "WPants">شلوار</option>
						<option value = "trousers">سرهمی</option>
					</optgroup>
				</select><br>
				
				<label for = "sizeProduct">سایزهای محصول</label><br>
                <span class = "form-text">سایز های محصول <?php if( isset($row['sizeProduct']) ) echo $row['sizeProduct']; ?> میباشد.</span>
				<section class="form-check" id="sizeProduct">
					<input class="form-check-input" type="checkbox" id="S" name="sizeProduct[]" value="S">
					<label class="form-check-label" for="S">SMALL</label><br>
					<input class="form-check-input" type="checkbox" id="M" name="sizeProduct[]" value="M">
					<label class="form-check-label" for="M">MEDIUM</label><br>
					<input class="form-check-input" type="checkbox" id="L" name="sizeProduct[]" value="L">
					<label class="form-check-label" for="L">LARGE</label><br>
					<input class="form-check-input" type="checkbox" id="XL" name="sizeProduct[]" value="XL">
					<label class="form-check-label" for="XL">X LARGE</label><br>
					<input class="form-check-input" type="checkbox" id="XXL" name="sizeProduct[]" value="XXL">
					<label class="form-check-label" for="XXL">XX LARGE</label><br>
					<input class="form-check-input" type="checkbox" id="XXXL" name="sizeProduct[]" value="XXXL">
					<label class="form-check-label" for="XXXL">XXX LARGE</label><br>
				</section><br>
				
				<label for = "description">توضیحات </label>
				<textarea name = "description" id = "description" class="form-control"><?php if( isset($row['description']) ) echo $row['description']; ?></textarea><br>
				
				
				<input type = "submit" name = "submit" value = "ویرایش محصول" class="btn btn-primary">
			</form>
		</main>
		<aside></aside>
		<footer></footer>

        <script>
            var typeProduct = "<?php if( isset($row['typeProduct']) ) echo $row['typeProduct']; ?>";
            document.getElementById('typeProduct').value= typeProduct;
        </script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>