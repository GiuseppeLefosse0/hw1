<?php
    session_start();
    require_once 'dbconfig.php';
    $input = json_decode(file_get_contents('php://input'), true); 
    if(isset($input['Piano']))
    {
        $conn=mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
        $piano=mysqli_real_escape_string($conn, $input['Piano']);
        $username=$_SESSION['username'];

        $query="UPDATE utenti SET piano='$piano' where username='$username'";
         
        $res=mysqli_query($conn, $query);
         
        if (!$res) {
            echo 'errore';
        } else echo 'ok';
       
        mysqli_close($conn);
    }
?>