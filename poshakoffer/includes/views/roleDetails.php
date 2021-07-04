<?php
$title = 'جزییات نقش';
$main = ' 
			if( isset($alerts) )
				echo $alerts;
			get_template_part("roleDetails", null, $row);
';
include 'templates/master.php';