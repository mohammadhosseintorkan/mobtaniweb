<?php
	include '__php__.php';
	
	if(! Authentication :: check() ){
		Alert::alerts('ابتدا وارد شوید');
		redirect('login.php?redirect=dashboard.php');
	}
		
	$alerts = Alert::alerts();
	view('dashboard', null, null, $alerts);