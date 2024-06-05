<?php

require_once 'dbconfig.php';
session_start();


$username=$_SESSION['username'];

$conn=mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
$query="SELECT esercizio FROM schede Where username='$username'";
$res= mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($res)){

    $esercizi[]=$row;

}

if($esercizi){
    echo json_encode($esercizi);
}

mysqli_close($conn);
    
?>