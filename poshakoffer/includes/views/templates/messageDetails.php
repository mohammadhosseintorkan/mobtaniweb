<?php
echo "
			<h2>
				عنوان پیام: {$title}
			</h2>
			<p>
				<span class = 'fw-bold'>متن پیام: </span>";
                if( ! empty( $body ) ) echo $body;
                else echo '---';
                echo "
			</p>
			<hr>
			<section class = 'row container'>
				<span class = 'col'>
                    <a href = 'deleteMessage.php?id={$id}' class = 'btn btn-danger'>حذف</a>
				</span>
			</section>";
?>