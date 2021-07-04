<?php
$title = 'لیست نقش ها';
$main = '      
            echo "<section class= \"row row-cols-1 g-4\">";
                foreach ($table as $row){
                    get_template_part("roleCard", null, $row);
                }
            echo "</section>";
';
include 'templates/master.php';