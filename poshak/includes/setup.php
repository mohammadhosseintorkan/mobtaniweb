<?php
include 'settings.php';
include 'functions.php';


$db = new DB();
if( ! $softSetup ) {
	$sql = "DROP DATABASE IF EXISTS {$dbName}";
	$db->execute($sql);
	alerts("دیتابیس {$dbName} و جداول آن حذف شد", 'success');
}

$sql = "CREATE DATABASE IF NOT EXISTS {$dbName}
		CHARSET {$charset}
		COLLATE {$collate}";
$result = $db -> execute( $sql );
if( isset($result) )
	alerts("دیتابیس {$dbName} با موفقیت ایجاد شد", 'success');
unset( $db );



$db = new DB();

$sql = "CREATE TABLE IF NOT EXISTS Message(
		id INT AUTO_INCREMENT NOT NULL,
		title VARCHAR(255),
		body TEXT,
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db -> execute( $sql );
if( isset($result) )
	alerts('جدول تماس باما با موفقیت ایجاد شد', 'success');



$sql = "CREATE TABLE IF NOT EXISTS Product(
		id INT AUTO_INCREMENT NOT NULL,
		name VARCHAR(30),
		price VARCHAR(30),
		typeProduct VARCHAR(30),
		sizeProduct VARCHAR(30),
		imgSrc VARCHAR(255),
		description TEXT,
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db -> execute( $sql );
if( isset($result) )
	alerts('جدول محصول با موفقیت ایجاد شد', 'success');


$sql = "CREATE TABLE IF NOT EXISTS User(
		id INT AUTO_INCREMENT NOT NULL,
		firstname VARCHAR(50),
		lastname VARCHAR(50),
		username VARCHAR(255),
		pass VARCHAR(30),
		email VARCHAR(255),
		mobile VARCHAR(30),
		birthday VARCHAR(30),
        Role VARCHAR(20),
        imgSrc VARCHAR(255),
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db -> execute( $sql );
if( isset($result) )
    alerts('جدول کاربران با موفقیت ایجاد شد', 'success');



$alerts = alerts();
?>
<!doctype html>
<html lang = "fa">
	<head>
		<title>محمد حسین ترکان | ستاپ</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">

		<link href = "../public/assets/css/style.css" rel = "stylesheet">
		<style>
		</style>
	</head>
	<body class = "container">
		<header></header>
		<main>
			<?php
				if( isset($alerts) )
					echo $alerts;
			?>
		</main>
		<aside></aside>
		<footer></footer>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	</body>
</html>
