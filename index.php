<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contactez-nous</h1>
    <p>Pour toute demande, remplissez le formulaire ci-dessous.</p>
    <form method="POST">
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Sujet</label>
        <input type="text" name="sujet" required>
        <textarea name="message" required></textarea>
        <input type="text" value="Envoyer le message">
    </form>



    <!-- <?php
    $retour= mail("enzo.daloiadignazio@gmail.com", "essai", "Coucou les amies", "From:projetgb@projetg4bellecour.cf");
    if($retour){
        echo "<p> L'email à été envoyé !</p>";
    }

    ?> -->
</body>
</html>