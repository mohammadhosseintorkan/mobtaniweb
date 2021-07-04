<?php
	include '__php__.php';
	
	if(! Authentication :: check() ){
		Alert::alerts('ابتدا وارد شوید');
        $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
		redirect('login.php');
	}
		
	$alerts = Alert::alerts();
	view('dashboard', null, null, $alerts);