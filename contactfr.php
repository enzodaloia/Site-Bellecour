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

</head>

<header>
<div id="bannière1">
    <img id="bannière1" src="Images/banniere1.jpg" class="img-top">
   </div>

        <nav>
            <ul class="links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>

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
        

    <div id="footer">
		<p>Bellecour | projet Pédagogique</p>
	</div>
    <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>