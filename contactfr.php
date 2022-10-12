<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" >
    <title>Document</title>
</head>
<body>
<h1>Contactez-nous</h1>
    <p>Pour toute demande, remplissez le formulaire ci-dessous.</p>
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
</body>
</html>