<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pgina modular</title>
    <!-- link css -->
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!--js-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

</head>

<body>
    <!-- menu -->
    <?php require "modulos/menu.php"; ?>
    <!-- header -->
    <?php require "modulos/header.php"; ?>

    <!-- slider -->
    <?php require "modulos/slider.php"; ?>

    <!-- formulario de registro -->

    <?php require "modulos/form-registro.php"; ?>

    <!--seccion informativa-->

    <?php require "modulos/seccion-info.php"; ?>

    <!-- informativa con link-->
    <?php require "modulos/seccion-link.php"; ?>

    <!--  envios-->
    <?php require "modulos/envios.php"; ?>

    <!-- footer-->
    <?php require "modulos/footer.php"; ?>

</body>
<script src="script.js"></script>

</html>