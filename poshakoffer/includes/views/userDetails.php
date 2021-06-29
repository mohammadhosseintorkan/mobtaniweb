<?php
$title = 'جزییات کاربر';
$main = ' 
			if( isset($alerts) )
				echo $alerts;
			get_template_part("userDetails", null, $row);
';
include 'templates/master.php';