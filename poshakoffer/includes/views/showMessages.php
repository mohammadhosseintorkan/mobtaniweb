<?php
$title = 'لیست پیام ها';
$main = '
            if( isset($alerts) )
                echo $alerts;
            echo "<section class= \"row row-cols-1 g-4\">";
                foreach ($table as $row){
                    get_template_part("messageCard", null, $row);
                }
            echo "</section>";
';
include 'templates/master.php';