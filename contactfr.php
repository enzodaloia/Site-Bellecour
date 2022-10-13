<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css" > 

</head>
<header>
		<div id="bannière1">
		<div id=box1accueil>
		<!-- <p><img src="Images/LogoBellecourOfficiel.png"></p> -->
		</div>
		</div>
			<div>
				<ul>
					<li><a href="accueilfr.php">Accueil</a></li>
					<li><a>Activités</a>
						<ul>
							<li><a href="activitesfr.php">Activités</a></li>
							<li><a href="transportfr.php">Transport</a></li>
						</ul>
					</li>
					<li><a href="histoirefr.php">Histoire</a></li>
					<li><a href="actualitesfr.php">Actualités</a></li>
                    <li><a href="contactfr.php">Contact</a></li>
                    <li><a href="accesfr.php">Accès</a></li>
				</ul>
			</div>
		<div id="bannière2">  
	</div>
</header>
<body id="body">
    
    <div class="container-fluid">
        <center>
        <div class="row">
            <div class="col-md-12"></div>
        <h1>Contactez-nous</h1>
        <p>Pour toute demande, remplissez le formulaire ci-dessous.</p>
        </div>

        
        <form method="POST">
            <label>Nom</label>
            <input type="text" name="nom" required>
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
            $message= "Ce message vous à été envoyé via la page du site projetg4bellecour.cf
            Nom : " . $_POST["nom"] . "
            Email : " . $_POST["email"] . "
            Message : " . $_POST["message"];
            $retour= mail("enzo.daloiadignazio@gmail.com", $_POST["sujet"], $message, "From:projetgb@projetg4bellecour.cf" . "\r\n" . "Reply-to:" . $_POST["email"]);
            if($retour){
                echo "<p> L'email à été envoyé !</p>";
            }
        }
        ?>
        </center>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
