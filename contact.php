<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Améliorer le référencement du site -->
    <meta name="description" content="Découvrez le confort de vivre ensemble dans les appartements de la résidence sénior de Contraste Habitat au cœur de Saint-Gaudens.">
    <meta name="keywords" content="Contraste Habitat, logement partagé, Saint-Gaudens, confort de vie, Résidence sénior, Studio, T1, appartement">
    <meta name="author" content="Contraste Habitat">
    <meta property="og:title" content="Contraste Habitat - Contactez-nous">
    <meta property="og:description" content="Découvrez le confort de vivre ensemble dans les appartements de la résidence sénior de Contraste Habitat au cœur de Saint-Gaudens.">
    <meta property="og:image" content="Images/jardin.jpeg">

    <title>Contraste Habitat - Contactez-nous !</title>

    <link rel="stylesheet" href="style.css">

    <style>
        .grid.template {
            grid-template-columns: 1fr 1fr;
        }

        #txtobjet, #txtdemande, input[type=submit] {
            grid-column: span 2;
        }

        iframe {
            width: 700px;
            max-height: 100%;
            min-height: 400px;
        }

        @media  (max-width: 600px) {
            .grid.template > * {
                grid-column: span 2;
            }
        }
    </style>
</head>
<body id="accueil">

    <?php
    include_once('composants/nav.html');
    ?>

    <section id="1" class="grid" style="margin-top: var(--sect-gap);">
        <div class="content">
            <div class="title">
                <h2 style="width: fit-content;">Contactez-nous à tout moment !<div class="overline"></div></h2>
                <h3>Toujours à l'écoute de nos aînés</h3>
            </div>
        </div>
        <div class="content flexbox align between" style="min-height: 500px;">
            <form action="" method="post" class="grid template">
                <input type="text" name="txtname" id="txtname" placeholder="Nom" required>
                <input type="text" name="txtfirstname" id="txtfirstname" placeholder="Prénom" required>
                <input type="tel" name="tel" id="tel" placeholder="Téléphone" required>
                <input type="email" name="txtemail" id="txtemail" placeholder="E-mail" required>
                <input type="text" name="txtobjet" id="txtobjet" placeholder="Objet de la demande..." required>
                <textarea name="txtdemande" id="txtdemande" cols="30" rows="10" placeholder="Écrivez ici le contenu de la demande..." required></textarea>
                <input type="submit" value="Envoyer" class="btn" style="margin: 0 auto;">
            </form>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2912.928946730951!2d0.7150186756268718!3d43.10600808765024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a8fc885f75e5bd%3A0x6d1aa50daedd8726!2s35%20Av.%20Mar%C3%A9chal%20Foch%2C%2031800%20Saint-Gaudens!5e0!3m2!1sfr!2sfr!4v1703595805378!5m2!1sfr!2sfr" height="400px" width="200px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <?php
    include_once('composants/footer.php');
    ?>

    <!-- traitement_form.php -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["txtname"];
        $firstname = $_POST["txtfirstname"];
        $phone = $_POST["tel"];
        $email = $_POST["txtemail"];
        $objet = $_POST["txtobjet"];
        $demande = $_POST["txtdemande"];

        $to = "contraste.habitat@orange.fr";
        $subject = "$name $firstname - $objet";
        $message = "Informations personnelles :\n\n$name $firstname\n$phone\n$email\n\n\nContenu de la demande:\n\n$demande";

        // Utilisez la fonction mail() avec les en-têtes définis
        mail($to, $subject, $message);
    }
    ?>
    
</body>
</html>