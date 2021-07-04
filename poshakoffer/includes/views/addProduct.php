<?php
$title = 'افزودن محصول';
$form = new Form();
$form -> textbox('نام محصول', 'name', null, null, 'required');
$form -> numberbox('قیمت', 'price', null, 'تومان', '0', '1000', 'required');
$form -> image('تصویر محصول', 'productPicture', null, null);
$form -> select('نوع محصول', 'typeProduct', null, null, null, array('تی شرت مردانه','پیراهن مردانه','شلوار مردانه','مانتو زنانه','بلوز و شومیز زنانه','تی شرت زنانه','شلوار زنانه','سرهمی زنانه'));
$form -> switche('SMALL', 'sizeProduct[]', 'S', null, null);
$form -> switche('MEDIUM', 'sizeProduct[]', 'M', null, null);
$form -> switche('LARGE', 'sizeProduct[]', 'L', null, null);
$form -> switche('X LARGE', 'sizeProduct[]', 'XL', null, null);
$form -> switche('XX LARGE', 'sizeProduct[]', 'XXL', null, null);
$form -> switche('XXX LARGE', 'sizeProduct[]', 'XXXL', null, null);
$form -> bigText( 'توضیحات', 'description');
$main = '
		echo <<< EOT
		    <h1>افزودن محصول</h1>
				<h3>مشخصات محصول</h3>
                $form
EOT;
';


include 'templates/master.php';



/*
<label for = "typeProduct">نوع محصول</label>
				<select name = "typeProduct" id = "typeProduct" class="form-control">
					<optgroup label="مردانه">
						<option value = "MTshirt">تی شرت مردانه</option>
						<option value = "Shirt">پیراهن مردانه</option>
						<option value = "MPants">شلوار مردانه</option>
					</optgroup>
					<optgroup label="زنانه">
						<option value = "mantle">مانتو زنانه</option>
						<option value = "blouse">بلوز و شومیز زنانه</option>
						<option value = "WTshirt">تی شرت زنانه</option>
						<option value = "WPants">شلوار زنانه</option>
						<option value = "trousers">سرهمی زنانه</option>
					</optgroup>
				</select><br>

				<label for = "sizeProduct">سایزهای محصول</label>
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
*/