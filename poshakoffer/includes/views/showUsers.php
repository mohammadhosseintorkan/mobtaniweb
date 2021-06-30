<?php
$title = 'لیست کاربران';
$main = '      
            if( isset($alerts) )
                echo $alerts;
            echo "<section class= \"row row-cols-1 row-cols-sm-2 row-cols-x1-3 g-4\">";
                foreach ($table as $row){
                    get_template_part("userCard", null, $row);
                }
            echo "</section>";
';
include 'templates/master.php';