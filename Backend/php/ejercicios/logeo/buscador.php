<?php

require('conn.php');

$text =  $_REQUEST['term'];

$sql = "SELECT email FROM usuarios WHERE email = '$text'";
$result = $conn->query($sql);

$array[] = '';

if($result ->num_rows > 0){
    while($row = $result -> fetch_assoc()) {
        // $array[] =$row['email'];
       
        echo '<p>usuario no disponible</p>'; 
    }
    
    // echo  '#d33c74';
    // echo 'usuario no disponible'; 

} else 
echo '<p>usuario disponible</p>';


   

// foreach ($array as $user) {
//     //se imprimira cada item del array como una lista
//     echo $user . '<br>';
// }


?>