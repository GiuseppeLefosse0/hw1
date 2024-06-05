<?php

    require_once 'dbconfig.php';

    if(!empty($_POST['username']) && 
    !empty($_POST['password'])){

        $conn=mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die('Errore:'.mysqli_connect_error());
        $username=mysqli_real_escape_string($conn,$_POST['username']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);

        $query="SELECT username, password FROM utenti WHERE username='$username'";
        $res=mysqli_query($conn, $query);
        if(mysqli_num_rows($res) >0) {
            $row=mysqli_fetch_assoc($res);
            if($password == $row['password']){
                session_start();
                
                $_SESSION['loggato']=true;
                $_SESSION['username']=$row['username'];

                header("location: account.php");
                mysqli_close($conn);
            }
        }

        $errore = "Username e/o password errati!";
        
    } else if (isset($_POST["username"]) || isset($_POST["password"])) {
        $errore = "Inserisci username e password!";
    }
?>

<html>
    <head>
        <title>RHINONATION - Accedi!</title>
        <meta charset='utf-8'>
        <link rel='stylesheet' href='css_file/login.css?ts=<?=time()?>&quot'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src="js_file/login.js" defer></script>
    </head>
    <body>
        <article>
            <section id='logo'>
                <img src='css_file/immagini/logo.jpg'>
                <h1>Benvenuto in RHINONATION!</h1>
            </section>
            <p>Effettua l'accesso!</p>

            <?php
                if (isset($errore)) {
                    echo "<span class='errore_php'>$errore</span>";
                }
            ?>
            <span class='hidden' id='errore_login'>Inserisci username e password!</span>
            <span class='hidden' id='cred_sbagliate'>Username e/o password errati!</span>

            <section id='login-form'>
                <form name='login' method='post' action='login.php' id='form_login'>
                    <label>Username:<input type='text' name='username' id='nome_utente'></label>
                    <label>Password:<input type='password' name='password' id='password'></label>
                    <label><input type='submit' value='Accedi' id='button'></label>
                </form>
            </section>

            <p class='footer_sign'>Non hai ancora un account? <a id='link' href='signup.php'>Registrati qui!</a>

        </article>
    </body>
</html>
