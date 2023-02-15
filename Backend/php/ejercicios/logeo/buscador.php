<?php

require('conn.php');

$text = '%' . $_REQUEST['term'] .'%';

$sql = "SELECT email FROM usuarios WHERE email LIKE '$text'";
$result = $conn->query($sql);

$array[] = '';

if($result ->num_rows > 0){
    while($row = $result -> fetch_assoc()) {
        $array[] =$row['email'];
    }
    
    echo '#d33c74'; 

} else  echo '#3cd3c2';
   



// foreach ($array as $user) {
//     //se imprimira cada item del array como una lista
//     echo $user . '<br>';
// }


?>