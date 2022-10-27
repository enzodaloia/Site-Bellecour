<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css" type="text/css" > 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="screen.css" media="screen">
    <link rel="stylesheet" href="impression.css" type="text/css" media="print">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font asesome 6 cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.0/css/all.css">
</head>

<header>
<div id="banniere1"></div>


        <div id="print">
            <ul>
                <li><a href="accueilfr.php">Accueil</a></li>
                <li><a href="activitesfr.php">Activités</a>
                </li>
                <li><a href="histoirefr.php">Histoire</a></li>
                <li><a href="actualitesfr.php">Actualités</a></li>
                <li><a href="contactfr.php">Contact</a></li>
                <li><a href="accesfr.php">Accès</a>
                <ul>
                    <li><a href="transportfr.php">Transport</a></li>
                </ul>
                </li>
            </ul>
        </div>
		</div>
		<div id="bannière2">  
	</div>
</header>
<body id="body">
        <div id="test">
            <p>/</p>
        </div>
        <div id="france"><a href="contactfr.php"><p><img id="imgfr" src="Images/france.jpg"></p></a></div>
        <div id="angleterre"><a href="contacten.php"><p><img id="imgen" src="Images/angleterre.jpg"></p></a></div>
    <center>
    <div id="form">
        <form method="POST">
        <h1>Contactez-nous</h1>
        <p>Pour toute demande, remplissez le formulaire ci-dessous.</p>
        
            <label>Nom</label>
            <input type="text" name="nom" required>            
            <label>Prénom</label>
            <input type="text" name="prenom" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Sujet</label>
            <input type="text" name="sujet" required>
            <label>Message</label>
            <textarea name="message" required></textarea>
            <input type="submit" value="Envoyer le message">
        
        </form>
        <?php
        if (isset($_POST["message"])) {
            //on vérifie que le champ mail est correctement rempli
            if(!empty($_POST['mail'])) {
            }
                //on vérifie que l'adresse est correcte
                if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])){
                    $message= "Ce message vous à été envoyé via la page du site projetg4bellecour.cf
                    Nom : " . $_POST["nom"] . "
                    Prénom : " . $_POST["prenom"] . "
                    Email : " . $_POST["email"] . "
                    Message : " . $_POST["message"];
                    $retour= mail("enzo.daloiadignazio@gmail.com", $_POST["sujet"], $message, "From:projetgb@projetg4bellecour.cf" . "\r\n" . "Reply-to:" . $_POST["email"]);
                    if($retour){
                        echo "<p> L'email à été envoyé !</p>";
                    }
                }else{
                    echo "<p> L'email est invalide !</p>";
                }
        }
    ?>
    </div>
    </center>

        
    <footer class="bg-light text-center text-white">
  <!-- Grid container -->
    <button class="btn btn-primary" type="button">
      <i class="fa-brands fa-facebook"></i>
    </button>
    <button class="btn btn-danger" type="button">
      <i class="fa-brands fa-instagram"></i>
    </button>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright
  </div>
  <!-- Copyright -->
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>