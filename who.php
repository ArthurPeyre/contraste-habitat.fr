<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Améliorer le référencement du site -->
    <meta name="description" content="Découvrez le confort de vivre ensemble dans les appartements de la résidence sénior de Contraste Habitat au cœur de Saint-Gaudens.">
    <meta name="keywords" content="Contraste Habitat, logement partagé, Saint-Gaudens, confort de vie, Résidence sénior, Studio, T1, appartement">
    <meta name="author" content="Contraste Habitat">
    <meta property="og:title" content="Contraste Habitat - Découvrez qui nous sommes !">
    <meta property="og:description" content="Découvrez le confort de vivre ensemble dans les appartements de la résidence sénior de Contraste Habitat au cœur de Saint-Gaudens.">
    <meta property="og:image" content="Images/jardin.jpeg">

    <title>Contraste Habitat - Découvrez qui nous sommes !</title>

    <link rel="stylesheet" href="style.css">

    <style>
        header {
            background-image: linear-gradient(to bottom left, rgba(0, 0, 0, 0.00) 51%, rgba(0, 0, 0, 0.75) 100%), url(Images/Aider-une-personne-âgée.jpg);
        }
    </style>
</head>
<body id="accueil">

    <?php
    include_once('composants/nav.html');
    ?>

    <header>
        <div class="content">
            <div class=" card shadow title grid">
                <h2>Découvrez toute l'équipe de Contraste Habitat</h2>
                <h3>Un coup d'oeil Un coup d’œil sur notre histoire</h3>
                <a href="#1" class="btn">En savoir plus</a>
            </div>
        </div>
    </header>

    <section id="1">
        <div class="background disable">
            <div class="content flexbox align between reverse">
                <div class="text">
                    <div class="title">
                        <h2>Écoute et engagement envers nos aînés<div class="overline"></div></h2>
                        <h3>Nourrir la réflexion pour un mieux-vivre collectif</h3>
                    </div>
                    <p>Proche et attentif à nos aînés, notre questionnement sur l'adaptation de la société face au vieillissement de la population a donné naissance à un projet qui vise à offrir des solutions aux familles et aux proches.</p>
                    <p>C'est en accompagnant nos aînés que cette initiative a pris forme.</p>
                </div>
                <img src="Images/engagement.jpg" alt="">
            </div>
        </div>
        <div class="background">
            <div class="content flexbox align between">
                <div class="text">
                    <div class="title">
                        <h2>Vieillir en préservant son autonomie<div class="overline"></div></h2>
                        <h3>Privilégier le maintien à domicile et la qualité de vie</h3>
                    </div>
                    <p>Bien que vieillir soit souvent associé à la dépendance, nous croyons fermement que la perte d'autonomie peut être retardée. La mise en œuvre de services d'aides et de soins à la personne offre non seulement un moyen de maintenir un lien social, mais également de prolonger la vie à domicile.</p>
                    <p>Cependant, le rythme quotidien des familles et de l'entourage ne facilite pas toujours l'adhésion à une dynamique sociale, ludique, intellectuelle, culturelle et sportive.</p>
                </div>
                <img src="Images/vieillir.jpg" alt="">
            </div>
        </div>
        <div class="background disable">
            <div class="content flexbox align between reverse">
                <div class="text">
                    <div class="title">
                        <h2>Un logement adapté et connecté<div class="overline"></div></h2>
                        <h3>Bien vieillir chez soi</h3>
                    </div>
                    <p>La recherche du "bien vieillir chez soi" nécessite un logement adapté aux besoins individuels et un accès à des services.</p>
                    <p>Il est crucial qu'une personne âgée maintienne une vie sociale et reste intégrée dans son quartier, sa commune ou son territoire de vie afin d'éviter l'isolement et d'accroître la dépendance.</p>
                </div>
                <img src="Images/Groupe De Personnes âgées Se Liant Au Parc _ Photo Premium 1.png" alt="">
            </div>
        </div>
        <div class="background">
            <div class="content flexbox align between">
                <div class="text">
                    <div class="title">
                        <h2>Une vision pour l'accompagnement des aînés<div class="overline"></div></h2>
                        <h3>Un habitat regroupé et partagé</h3>
                    </div>
                    <p>Pour accompagner les personnes âgées dans cette phase de leur vie, nous avons fait le choix de développer sur Saint-Gaudens un habitat regroupé et partagé.</p>
                    <p>Cette initiative vise à créer un environnement propice à la convivialité, à l'autonomie et au bien-être collectif.</p>
                </div>
                <img src="Images/Groupe De Personnes âgées Se Liant Au Parc _ Photo Premium.png" alt="">
            </div>
        </div>
    </section>

    <section id="4">
        <div class="content grid center">
            <div class="title">
                <h2>L'équipe de Contraste Habitat</h2>
                <h3>Toujours présente lorsque vous en avez besoin</h3>
            </div>
            <div class="flexbox center">
                <div class="grid center" style="max-width: 500px;">
                    <img src="Images/coordonateur.jpg" class="shadow" alt="" style="width: 200px;height: 200px; border-radius: 100vh;">
                    <span class="bold">Coordonateur</span>
                    <p style="text-align: left;">Animateur socio-culturel pendant 10 ans puis travailleur social ces vingts dernières années, il est à l'origine du projet avec son épouse Stéphanie, architecte d'intérieur.<br>Fort de son expérience et de son expertise dans l'accompagnement à la personne, la construction et la mise en place de projets ainsi que la gestion du quotidien, il articule et ordonne l'ensemble des actions au sein de la villa "Saint-Gau" de même que celles de la société Contraste Habitat.<br>Grâce à son CAP de cuisinier il vous propose des repas diététiques, équilibrés et adaptés à vos problématiques alimentaires. Les repas sont confectionnés sur place en ayant recours le plus possible à des producteurs locaux.<br>Pêle-mêle il aime : les gens, l'Art, le cinéma, la photographie, la savate (boxe française), faire de la moto, jouer et écouter de la musique, la cuisine: à faire comme à déguster !</p>
                </div>
            </div>
        </div>
    </section>

    <section id="8" class="fullpage no-sect-gap" style="background-image: linear-gradient(to bottom left, rgba(0, 0, 0, 0.00) 51%, rgba(0, 0, 0, 0.75) 100%), url(Images/waw.png);">
        <div class="content">
            <div class="card grid shadow">
                <div class="title">
                    <h2>Prêt à débuter une nouvelle vie communautaire ?</h2>
                    <h3>Rejoignez notre famille !</h3>
                </div>
                <a href="contact.php" class="btn">Contactez-nous</a>
            </div>
        </div>
    </section>

    <?php
    include_once('composants/footer.php');
    ?>

    
</body>
</html>