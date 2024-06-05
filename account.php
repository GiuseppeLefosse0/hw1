<?php
    session_start();
    require_once 'dbconfig.php';
    if(!isset($_SESSION['loggato']) || $_SESSION['loggato']!==true){
      header("location: login.php");
      exit;
    }

    $conn=mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $username=$_SESSION['username'];
    $query="SELECT * FROM utenti Where username='$username'";
    $res= mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);
    $nome=$row["nome"];
    $cognome=$row["cognome"];
    $email=$row["email"];
    $piano=$row["piano"];
?>


<html>
  <head>
    <meta charset="utf-8">
    <title>RHINONATION - Il tuo Account</title>
    <link rel="stylesheet" href="css_file/account.css?ts=<?=time()?>&quot">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    <header>
      <nav>
        <div class="nav-logo">
          <img class="logo" src="css_file/immagini/logo.jpg">
          <span>RHINONATION</span>
        </div>
        <div id="links">
          <a href='index.php' id="home">Home</a>
          <a href='account.php'>Account</a>
          <a href='scheda.php'>Scheda</a>
          <a href='ricerca_scheda.php'>Ricerca</a>
          <a href='playlists.php'>Playlists</a>
        </div>
        <div id="menu">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </nav>
      <h1>ACCOUNT</h1>
      <div id="overlay"></div>
    </header>

    <article>

        <section>
            <div class="account">
                Il tuo account
                <p>Username: <?php echo "$username" ?></p> 
                <p>Nome: <?php echo "$nome" ?></p>
                <p>Cognome: <?php echo "$cognome" ?></p>
                <p>Email: <?php echo "$email" ?></p>
                <p>Piano: <?php echo "$piano" ?></p>
            </div>
        </section>

        <a id='logout' href='logout.php'>Effettua il logout!</a>
    </article>

    <footer>
        <p>
            DEVELOPED BY GIUSEPPE LEFOSSE 1000019322
        </p>
    </footer>

    </body>

   

</html>