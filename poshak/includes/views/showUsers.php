<!doctype html>
<html lang = "fa" class = "container-fluid">
<head>
    <title>محمد حسین ترکان | کاتالوگ</title>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">

    <link href = "assets/css/style.css" rel = "stylesheet">
    <style>
    </style>
</head>
<body class = "container">
<header></header>
<main class="container">
    <?php
    if( isset($alerts) )
        echo $alerts;
    ?>
    <section class="row row-cols-1 row-cols-sm-2 row-cols-x1-3 g-4">
    <?php
    foreach ($table as $row){
        include __DIR__ . '/templates/userCard.php';
    }
    ?>
    </section>
</main>
<aside></aside>
<footer></footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>