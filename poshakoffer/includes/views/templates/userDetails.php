<?php
echo "
			<h2>
				نام کاربر: {$firstname} {$lastname}
			</h2>
			<img src = '{$imgSrc}' class = 'card-img-top'>
			<p>
                <span class = 'fw-bold'>نام کاربری:</span>
                {$username} <br>
                <span class = 'fw-bold'>پست الکترونیکی:</span>
                {$email} <br>
                <span class = 'fw-bold'>شماره موبایل:</span>
                {$mobile} <br>
                <span class = 'fw-bold'>تاریخ تولد:</span>
                {$birthday}
			</p>
			<hr>
			<section class = 'row container'>
				<span class = 'col'>
				    <a href = 'editUser.php?id={$id}' class = 'btn btn-primary'>ویرایش</a>
                    <a href = 'deleteUser.php?id={$id}' class = 'btn btn-danger'>حذف</a>
				</span>
			</section>";
?>