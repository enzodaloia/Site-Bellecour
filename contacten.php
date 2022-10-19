<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" >
    <title>Contact</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<header>
		<div id="bannière1">
		</div>
			<div>
				<ul>
					<li><a href="accueilen.php">Home</a></li>
					<li><a>Activities</a>
						<ul>
							<li><a href="activitesen.php">Activities</a></li>
							<li><a href="transporten.php">Transport</a></li>
						</ul>
					</li>
					<li><a href="histoireen.php">Story</a></li>
					<li><a href="actualitesen.php">News</a></li>
                    <li><a href="contacten.php">Contact</a></li>
                    <li><a href="accesen.php">Access</a></li>
				</ul>
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
        <form method="POST">
        <h1>Contact us</h1>
        <p>For any request, fill out the form below.</p>
        
            <label>Last name</label>
            <input type="text" name="nom" required>
            <label>E-mail</label>
            <input type="email" name="email" required>
            <label>Subject</label>
            <input type="text" name="sujet" required>
            <label>Message</label>
            <textarea name="message" required></textarea>
            <input type="submit" value="Submit">
        
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
        

    <div id="footer">
		<p>Bellecour | educational project</p>
	</div>








    <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>