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
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            text-align: center;
            
        }

        table {
            /* border: 2px solid black; */
            border-collapse: collapse;
            /* padding: 5px 2px; */
            display: flex;
            justify-content: center;
        }

        tbody {
            height: 100%;
        }

        th {
            text-align: center;
            background-color: #aabbcc;
            border: 2px solid black;
            padding: 2px 5px;
        }

        td {
            background-color: #aabbcc;
            text-align: center;
            border: 1px solid black;
            padding: 3px 6px;
        }

        input {
            border: none;
            background-color: #aabbcc;
        }

        select {
            background-color: #aabbcc;
        }
    </style>
</head>

<body>

    <div class="box">

        <h1>Panel de Administración</h1>

        <?php

        if ($result->num_rows > 0) {

            echo "<table>
            <tr>
            <th>nombre</th>
            <th>contraseña</th>
            <th>tipo de usuario</th>
            <th>Acciones</th>
            </tr>";

            while ($row = $result->fetch_assoc()) {
                $user = $row['email'];
                $clave = $row['clave'];
                $user_type = $row['usertype'];
                $id = $row['id'];

                echo "<tr>
                <form action='archivo-edi-admi.php' method='post'>
                <td>
                <input type='text' placeholder='Email' name='user' value='$user'>
                </td><td>
                <input type='text' placeholder='contraseña' name='clave' value='$clave'>
                </td><td>
                <input type='text' placeholder='user_type' name='tipo usuario' value='$user_type'>
                <select  name='user_type'>
                <option value ='$user_type'>Admi</option>
                <option value ='$user_type'>User</option>
                </select>
                </td><td>
                <input type='text' placeholder='id' name='id' value='$id' hidden>
                
                <input type='submit' value='actualizar'>
                </td>
                </form>
                </tr>";
            }
            echo "</table>";
        }
        ?>

    </div>

</body>

</html>