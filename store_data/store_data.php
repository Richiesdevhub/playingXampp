<?php
require '../connection/database_connection.php';

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

$insert_data = "INSERT INTO persons VALUES ('$name', 
'$lastname', '$email')";

$query = mysqli_query($connection, $insert_data);

if($query){
    echo 'Guardado correctamente';
}else{
    echo 'No guardato';
}

?>