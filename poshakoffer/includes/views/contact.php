<?php
$title = 'تماس با ما';
$form = new Form();
$form -> textbox('عنوان پیام:', 'title', null, 'عنوان پیام الزامی است', 'required');
$form -> bigText('متن پیام:', 'body', null, null);
$main = '
		echo <<< EOT
		    <h1>تماس با ما</h1>
                $form
EOT;
';


include 'templates/master.php';
