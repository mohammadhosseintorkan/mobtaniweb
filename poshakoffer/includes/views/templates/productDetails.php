<?php
echo "
			<h2>
				نام محصول: {$name}
			</h2>
			<img src = '{$imgSrc}' class = 'card-img-top'>
			<h3>مشخصات</h3>
			<p>
				<span class = 'fw-bold'>قیمت: </span>";
                echo number_format( $price );
                echo"			تومان<br>
				<span class = 'fw-bold'>توضیحات: </span>";
                if( ! empty( $description ) ) echo $description;
                else echo '---';
                echo "
			</p>
			<h3>ویژگی ها</h3>
			<p>
				<span class = 'fw-bold'>نوع محصول: </span>";
                echo ( $typeProduct );
                echo" <br>
                <span class = 'fw-bold'>سایز های محصول: </span>";
                echo ( $sizeProduct );
                echo "
			</p>
			<hr>
			<section class = 'row container'>
				<span class = 'col'>
                    <a href = 'editProduct.php?id={$id}' class = 'btn btn-primary'>ویرایش</a>
                    <a href = 'deleteProduct.php?id={$id}' class = 'btn btn-danger'>حذف</a>
				</span>
			</section>";
?>