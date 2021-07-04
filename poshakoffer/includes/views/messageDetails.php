<?php
$title = 'جزییات پیام';
$main = ' 
			if( isset($alerts) )
				echo $alerts;
			get_template_part("messageDetails", null, $row);
';
include 'templates/master.php';