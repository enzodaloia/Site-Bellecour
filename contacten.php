<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" >
    <title>Contact</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="screen.css" media="screen">
    <link rel="stylesheet" href="impression.css" type="text/css" media="print">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font asesome 6 cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.0/css/all.css">
</head>
<header>
<div id="banniere1">
   </div>


        <div id="print">
				<ul>
					<li><a href="accueilen.php">Home</a></li>
					<li><a href="activitesen.php">Activities</a>
					</li>
					<li><a href="histoireen.php">Story</a></li>
					<li><a href="actualitesen.php">News</a></li>
                    <li><a href="contacten.php">Contact</a></li>
                    <li><a href="accesen.php">Access</a>
					<ul>
							<li><a href="transporten.php">Transport</a></li>
					</ul>
					</li>
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
    <div id="form">
        <form method="POST">
        <h1>Contact us</h1>
        <p>For any request, fill out the form below.</p>
        
            <label>Last name</label>
            <input type="text" name="derniernom" required>
            <label>first name</label>
            <input type="text" name="premiernom" required>
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
            Nom : " . $_POST["derniernom"] . "
            Prénom : " . $_POST["premiernom"] . "
            Email : " . $_POST["email"] . "
            Message : " . $_POST["message"];
            $retour= mail("enzo.daloiadignazio@gmail.com", $_POST["sujet"], $message, "From:projetgb@projetg4bellecour.cf" . "\r\n" . "Reply-to:" . $_POST["email"]);
            if($retour){
                echo "<p> L'email à été envoyé !</p>";
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