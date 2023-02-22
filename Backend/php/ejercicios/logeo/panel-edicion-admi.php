<?php
session_start();

include 'conn.php';

$user = $_SESSION['id'];

if (isset($_SESSION['logged']) && $_SESSION['usertype'] == 'admin') {

    $sql = "SELECT * From usuarios";

    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formilario de usuarios</title>

    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#3e2e70, #86def4);
        }

        .box {

            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;


        }

        h1 {

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 20px 0 15px 0;
            padding: 0;
            color: #bdf7f7;
            text-align: center;
            font-size: 30px;


        }

        .search input {
            padding: 10px;
            margin: 20px 0 15px 0;
            border-radius: 5px;
            width: 100%;
        }

        table {

            display: flex;
            justify-content: center;



        }

        tbody {
            height: 100%;

            /* border-collapse: collapse;  */
            border-radius: 6px;
            border: 2px solid #cdd0dc;
        }

        th {
            text-align: center;
            background-color: #cdd0dc;
            border-radius: 5px;
            border: 2px solid black;
            padding: 2px 5px;
        }

        td {
            background-color: #cdd0db;
            text-align: center;
            border: 1px solid black;
            padding: 3px 6px;
        }

        input {
            border: none;
            background-color: #cdd0dc;
        }

        td:nth-child(4) {
            background: transparent;
        }

        td:nth-child(5) {
            background: transparent;
        }

        td:nth-child(6) {
            background: transparent;
        }

        select {
            background-color: #cdd0dc;
            border-radius: 5px;
        }

        .button {

            text-align: center;
            width: 90px;
            border-radius: 5px;

        }

        .button:hover {

            background: #6492fdAD;
        }

        a .button {


            margin: 15%;
            padding: 5%;

            border: none;
            border-bottom: 1px solid #969fe4;
            font-weight: bold;
            font-size: 16px;
            color: #0d1a4f;
            text-decoration: none;


            /* top: 60%;
            position: absolute;
            bottom: 5%;
            transform: translateX(-50%); */

        }

        .form {
            padding: 10px;
            border-radius: 5px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        #display {

            display: flex;
            align-items: center;
            justify-content: center;


        }
    </style>
</head>

<body>

    <div class="box">

        <h1>Hola administrador</h1>

        <div class="container">
            <form action="">
                <!-- <select name="" id=""></select> -->
                <input type="text" placeholder='Email' name="users" onkeyup="showUser(this.value)">
                <select onchange="showUser(this.value, 'tabla-filteradmin.php')">
                <option value="" disabled selected>Filtrar por permisos</option>
                <option value="admin">Mostrar administradores</option>
                <option value="user">Mostrar usuarios</option>
            </select>
            </form> <br>
            <div id="display">
                <table>
                    <tr>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Tipo de usuario</th>
                    </tr>
                </table>
            </div>
        </div><br>

        <?php

        if ($result->num_rows > 0) {

            echo "<table>
            <tr>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Tipo de usuario</th>
            <th>Acciones</th>
            <th>Eliminar</th>
            </tr>";

            while ($row = $result->fetch_assoc()) {
                $user = $row['email'];
                $clave = $row['clave'];
                $usertype = $row['usertype'];
                $id = $row['id'];
                $usertype1 = 'admin';
                $usertype2 = 'user';

                if ($usertype != 'admin') {
                    $usertype1 = 'user';
                    $usertype2 = 'admin';
                }

                echo "<tr>
                <form action='archivo-edi-admi.php' method='post'>
                <td>
                <input type='text' placeholder='Email' name='user' value='$user' required>
                </td><td>
                <input type='text' placeholder='contraseña' name='clave' value='$clave' required>
                </td><td>
                <select  name='usertype'>
                <option value='$usertype1'>$usertype1</option>
                <option value='$usertype2'>$usertype2</option>
                </select>
                </td><td>
                <input type='text'  placeholder='id' name='id' value='$id' hidden>
    
                <input type='submit' class='button'name='update' value='Actualizar'>
                </td><td>
                <input type='submit'class='button' name='delete' value='Eliminar'> 

                </td>

                </form>
                </tr>";
            }
            echo "</table>";
        }

        ?>

        <form class="form" action='intro-datos.php' method='post'>

            <input type="email" placeholder="Email" name="user" required>
            <input type="text" placeholder="Contraseña" name="clave" required>
            <select name='usertype'>
                <option value='$usertype1'>User</option>
                <option value='$usertype2'>Admin</option>
            </select>
            <input type='submit' class='button' name='update' value='Crear'>
        </form>

        <a href="pag-principal.php"><input type="button" class="button" value='Inicio'></a>


    </div>

</body>
<script>
    //buscador en la base de datos del admi
    function showUser(text, php) {
        let display = document.getElementById('display');
        // Si el input está vacío, el div tb se vacía
        if (text == '') {
            display.innerHTML = '';
            return;
        } else {
            let ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    display.innerHTML = this.responseText;
                }
            };
            ajax.open('GET', 'tabla-get.php?q=' + text, true);
            ajax.send();
        }
    }
    // showUser('text', 'php');
</script>

</html>