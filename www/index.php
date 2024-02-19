<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Améliorer le référencement du site -->
    <meta name="description" content="Découvrez le confort de vivre ensemble dans les appartements de la résidence sénior de Contraste Habitat au cœur de Saint-Gaudens.">
    <meta name="keywords" content="Contraste Habitat, logement partagé, Saint-Gaudens, confort de vie, Résidence sénior, Studio, T1, appartement">
    <meta name="author" content="Contraste Habitat">
    <meta property="og:title" content="Contraste Habitat - Découvrez le confort de vivre ensemble !">
    <meta property="og:description" content="Découvrez le confort de vivre ensemble dans les appartements de la résidence sénior de Contraste Habitat au cœur de Saint-Gaudens.">
    <meta property="og:image" content="Images/jardin.jpeg">

    <title>Contraste Habitat - Découvrez le confort de vivre ensemble !</title>

    <link rel="stylesheet" href="style.css">

    <style>
        header {
            background-image: linear-gradient(to bottom left, rgba(0, 0, 0, 0.00) 51%, rgba(0, 0, 0, 0.75) 100%), url(Images/bg_jardin2.jpeg);
        }
        header .title {
            max-width: 420px;
        }
        header .title h3 {
            color: #CCC;
        }

        h1 {
            color: #fff;
            text-shadow: 0px 0px 15px #000;
        }

        #accueil iframe {
            width: min(700px, 100%);
            height: 400px;
            object-fit: cover;
            object-position: center;
        }

        .grid.template, .grid.template2 {
            grid-template-rows: 1fr 1fr;  /* Hauteurs des lignes */
            grid-template-columns: 3fr 2fr;  /* Largeurs des colonnes */
            width: 100%;
        }
        .grid.template2 {
            grid-template-rows: 1fr 1fr 1fr;  /* Hauteurs des lignes */
            width: 100%;
        }

        .grid.template img, .grid.template2 img {
            width: 100%;
        }

        .grid.template img:first-child {
            grid-row: span 2; /* Occuper deux lignes */
            height: 525px;
        }

        .grid.template2 img:first-child {
            grid-row: span 3; /* Occuper deux lignes */
            height: 800px;
        }

        .grid.template img:nth-child(2), .grid.template img:last-child, .grid.template2 img:nth-child(2), .grid.template2 img:nth-child(3), .grid.template2 img:last-child {
            height: 250px;
        }

        .radio {
            transition: all 150ms ease-in-out;
            cursor: pointer;
        }
        .radio:hover {
            color: var(--color-pink);
        }
        .radio.active {
            color: var(--color-pink);
        }

        @media  (max-width: 1000px) {
            #cinq .flexbox.center {
                flex-direction: column;
            }
        }

        @media  (max-width: 710px) {
            .grid.template, .grid.template2 {
                grid-template-columns: unset;
                grid-template-rows: unset;
                width: 100%;
            }

            .grid.template img, .grid.template2 img {
                height: 350px !important;
            }
        }
    </style>
</head>
<body id="accueil">

    <?php
    include_once('composants/nav.html');
    ?>

    <header>
        <div class="content">
            <div class="title grid">
                <h1>Découvrez le confort de vivre ensemble !</h1>
                <h3>L'équipe de Contraste Habitat propose des logements conçus pour le plaisir de vivre et, celui de partager.</h3>
                <a href="#1" class="btn">En savoir plus</a>
            </div>
        </div>
    </header>

    <section id="1">
        <div class="content flexbox align between">
            <div class="text">
                <div class="title">
                    <h2>Venez comme vous êtes, nous nous occupons de tout !<div class="overline"></div></h2>
                    <h3>Un peu de contexte</h3>
                </div>
                <p>Proche et à l’écoute de nos aînés, nous nous sommes questionnés sur l’adaptation de la société face au vieillissement de la population et aux solutions qui s’offrent aux familles et proches quant au maintien à domicile face à la solitude, et parfois à la perte progressive d’autonomie. C’est en accompagnant nos ainés que ce projet, est né !</p>
                <p>C’est ainsi que pour vous accompagner dans cette période de la vie, nous avons choisi de développer sur Saint-Gaudens, un habitat inclusif, un habitat partagé. Un habitat qui contraste avec les autres : la Villa Saint-Gau !</p>
                <a href="who.php" class="btn">En savoir plus</a>
            </div>
            <img src="Images/jardin.jpeg" alt="">
        </div>
    </section>

    <section id="2">
        <div class="content flexbox align reverse between">
            <div class="text">
                <div class="title">
                    <h2>La Villa Sain-Gau au cœur de la ville<div class="overline"></div></h2>
                    <h3>Des appartements privatifs dans un collectif !</h3>
                </div>
                <p>La villa "Saint-Gau" se situe au cœur de Saint-Gaudens, à 500 mètres de place centrale Jean Jaurès, à proximité immédiate de tous les commerces et services proposés par la commune.</p>
                <p>La maison peut accueillir de 7 à 9 résidents dans six logements privatifs allant du studio au T1 avec :</p>
                <ul style="list-style: initial; margin-left: var(--text-gap);">
                    <li>Kitchenette, plaque de cuisson, four, réfrigérateur, vaisselle, matériel de cuisine inclus</li>
                    <li>Salle d'eau</li>
                    <li>Lit avec matelas à mémoire de forme</li>
                    <li>Télévision connectée</li>
                </ul>
                <p>Les appartements meublés n’attendent que vos cadres, tableaux, photos, bibelots, pour finaliser la décoration.</p>
                <p>Il vous est possible de venir avec votre petit mobilier si vous le souhaitez (voir conditions lors de l’admission).</p>
                <a href="contact.php" class="btn">Contactez-nous</a>
            </div>
            <div class="grid" style="width: min(100%, 1000px);">
                <div class="flexbox align center" style="gap: var(--text-gap);">
                    <span class="bold radio active">Studio</span>
                    <span class="bold radio">T1 solo</span>
                    <span class="bold radio">T1 duo</span>
                </div>
                <div class="grid template">
                    <img class="img1" src="Images/studio_img1.jpeg" alt="">
                    <img class="img2" src="Images/studio_img2.jpeg" alt="">
                    <img class="img3" src="Images/studio_img3.jpeg" alt="">
                </div>
                
            </div>
        </div>
    </section>

    <section id="3" class="fullpage reverse no-sect-gap" style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.00) 51%, rgba(0, 0, 0, 0.75) 100%), url(Images/bg_salon.jpeg);">
        <div class="content">
            <div class="card shadow grid">
                <div class="title">
                    <h2>L'expérience d'une vie communautaire</h2>
                    <h3>Faites partie d’un même collectif !</h3>
                </div>
                <p>Les appartements sont agencés autour d’un espace de vie commun comprenant une cuisine aménagée, une salle à manger, un salon, une salle télévision, une buanderie, une terrasse et un jardin.</p>
                <a href="#4" class="btn">En savoir plus</a>
            </div>
        </div>
    </section>

    <section id="4" class="background">
        <div class="content grid center">
            <div class="title">
                <h2>Nos espaces de vie commune</h2>
                <h3>Des lieux qui rassemblent</h3>
            </div>
            <div class="grid template2">
                <img class="mainImg" src="Images/salon.jpg" alt="">
                <img src="Images/cuisine.jpg" alt="">
                <img src="Images/salle_a_manger.jpeg" alt="">
                <img src="Images/salon2.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="cinq">
        <div class="content grid center">
            <div class="title">
                <h2>Un environnement chaleureux</h2>
                <h3>Des plus qui vous rendront heureux !</h3>
            </div>
            <div class="flexbox center align">
                <div class="card grid center">
                    <svg width="63" height="50" viewBox="0 0 63 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.7642 0.395469L60.8864 16.0189C62.3902 16.8587 62.937 18.7628 62.0973 20.2666C61.2575 21.7703 59.3534 22.3172 57.8496 21.4774L31.2507 6.70345L4.64193 21.4872C3.13817 22.3269 1.23406 21.7801 0.3943 20.2763C-0.445462 18.7726 0.101359 16.8685 1.60512 16.0287L29.7371 0.395469C30.6843 -0.131823 31.8268 -0.131823 32.7739 0.395469H32.7642ZM31.2507 15.6284C32.2866 15.6284 33.28 16.0399 34.0125 16.7724C34.745 17.5049 35.1565 18.4983 35.1565 19.5342C35.1565 20.5701 34.745 21.5636 34.0125 22.2961C33.28 23.0286 32.2866 23.4401 31.2507 23.4401C30.2148 23.4401 29.2213 23.0286 28.4888 22.2961C27.7563 21.5636 27.3448 20.5701 27.3448 19.5342C27.3448 18.4983 27.7563 17.5049 28.4888 16.7724C29.2213 16.0399 30.2148 15.6284 31.2507 15.6284ZM14.0648 25.0024C15.1007 25.0024 16.0942 25.4139 16.8267 26.1464C17.5592 26.8789 17.9707 27.8724 17.9707 28.9083C17.9707 29.9442 17.5592 30.9377 16.8267 31.6702C16.0942 32.4027 15.1007 32.8142 14.0648 32.8142C13.0289 32.8142 12.0355 32.4027 11.303 31.6702C10.5705 30.9377 10.159 29.9442 10.159 28.9083C10.159 27.8724 10.5705 26.8789 11.303 26.1464C12.0355 25.4139 13.0289 25.0024 14.0648 25.0024ZM44.5306 28.9083C44.5306 27.8724 44.9421 26.8789 45.6746 26.1464C46.4071 25.4139 47.4006 25.0024 48.4365 25.0024C49.4724 25.0024 50.4659 25.4139 51.1984 26.1464C51.9308 26.8789 52.3424 27.8724 52.3424 28.9083C52.3424 29.9442 51.9308 30.9377 51.1984 31.6702C50.4659 32.4027 49.4724 32.8142 48.4365 32.8142C47.4006 32.8142 46.4071 32.4027 45.6746 31.6702C44.9421 30.9377 44.5306 29.9442 44.5306 28.9083ZM22.1598 47.9885L19.5331 43.1159V46.8753C19.5331 48.6036 18.1367 50 16.4084 50H11.7213C9.99297 50 8.59662 48.6036 8.59662 46.8753V43.1159L5.96993 47.9885C5.35475 49.1309 3.93888 49.5508 2.79641 48.9454C1.65394 48.34 1.23406 46.9144 1.83947 45.7719L5.54028 38.9073C7.03428 36.1244 9.94415 34.3863 13.1079 34.3863H15.012C16.6037 34.3863 18.1269 34.8257 19.4452 35.6166L22.7261 29.5332C24.2201 26.7503 27.13 25.0122 30.2937 25.0122H32.1978C35.3616 25.0122 38.2617 26.7503 39.7655 29.5332L43.0464 35.6166C44.3646 34.8257 45.8879 34.3863 47.4795 34.3863H49.3837C52.5474 34.3863 55.4475 36.1244 56.9513 38.9073L60.6521 45.7719C61.2673 46.9144 60.8376 48.3302 59.6951 48.9454C58.5527 49.5606 57.1368 49.1309 56.5216 47.9885L53.9047 43.1159V46.8753C53.9047 48.6036 52.5084 50 50.78 50H46.093C44.3646 50 42.9683 48.6036 42.9683 46.8753V43.1159L40.3416 47.9885C39.7264 49.1309 38.3105 49.5508 37.1681 48.9454C36.0256 48.34 35.6057 46.9144 36.2111 45.7719L39.7557 39.1807C39.5897 39.0147 39.4432 38.8292 39.3358 38.6144L36.7189 33.7418V39.0636C36.7189 40.7919 35.3225 42.1883 33.5942 42.1883H28.9071C27.1788 42.1883 25.7824 40.7919 25.7824 39.0636V33.7418L23.1557 38.6144C23.0386 38.8292 22.9019 39.0147 22.7359 39.1807L26.2804 45.7719C26.8956 46.9144 26.466 48.3302 25.3235 48.9454C24.181 49.5606 22.7652 49.1309 22.15 47.9885H22.1598Z" fill="#FFC000"/>
                    </svg>                        
                    <p class="bold">Toujours là pour vous !</p>
                    <p>Grâce à la présence et la bienveillance d’un coordonnateur et d’une maîtresse de maison, vous bénéficiez d’un accompagnement de proximité personnalisé, adapté à votre rythme, vos besoins.</p>
                </div>
                <div class="card grid center">
                    <svg width="32" height="50" viewBox="0 0 32 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.2454 4.68773C16.2454 3.44447 16.7393 2.25212 17.6184 1.373C18.4975 0.493884 19.6899 0 20.9331 0C22.1764 0 23.3687 0.493884 24.2478 1.373C25.127 2.25212 25.6209 3.44447 25.6209 4.68773C25.6209 5.93099 25.127 7.12333 24.2478 8.00245C23.3687 8.88157 22.1764 9.37546 20.9331 9.37546C19.6899 9.37546 18.4975 8.88157 17.6184 8.00245C16.7393 7.12333 16.2454 5.93099 16.2454 4.68773ZM12.9737 19.4638C12.8761 19.5029 12.7882 19.542 12.6905 19.581L11.9092 19.9228C10.3076 20.6358 9.07707 21.9933 8.52041 23.6535L8.26649 24.4153C7.71959 26.056 5.95192 26.9349 4.31122 26.388C2.67051 25.8411 1.79156 24.0734 2.33846 22.4327L2.59238 21.671C3.70572 18.3407 6.16677 15.6258 9.37006 14.1999L10.1513 13.8581C12.1827 12.9596 14.3801 12.4908 16.6067 12.4908C20.9624 12.4908 24.8884 15.1082 26.5584 19.122L28.0624 22.7257L30.1523 23.7707C31.6954 24.5422 32.3204 26.4173 31.5489 27.9603C30.7774 29.5034 28.9023 30.1284 27.3592 29.3569L24.7419 28.058C23.736 27.5502 22.9449 26.7103 22.5152 25.6653L21.5777 23.4191L19.6928 29.8159L24.527 35.0896C25.0544 35.6658 25.4255 36.3592 25.6209 37.121L27.8671 46.1155C28.287 47.7855 27.2713 49.4848 25.5916 49.9048C23.9118 50.3247 22.2222 49.309 21.8023 47.6293L19.6538 39.0253L12.7491 31.4957C11.3037 29.9233 10.7666 27.726 11.3135 25.6653L12.964 19.4638H12.9737ZM7.32894 38.8691L9.77047 32.775C9.97555 33.068 10.2099 33.3415 10.4541 33.6149L14.4289 37.9511L13.0128 41.4864C12.7784 42.0724 12.4268 42.6095 11.9776 43.0587L5.95192 49.0844C4.73116 50.3052 2.74864 50.3052 1.52788 49.0844C0.307114 47.8637 0.307114 45.8811 1.52788 44.6604L7.32894 38.8691Z" fill="#FFC000"/>
                    </svg>
                    <p class="bold">Une maison connectée</p>
                    <p>Connecté c’est unir, mettre une liaison entre un ou plusieurs éléments.</p>
                    <p>En plus des activités proposées à la villa, vous serez également invité(e) à participer aux activités socio-culturelles organisées dans la commune et plus largement du territoire.<br/>Et puis il y a aussi la connexion numérique, présente dans toute la villa.</p>
                </div>
                <div class="card grid center">
                    <svg width="43" height="50" viewBox="0 0 43 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.07926 14.5833C7.07926 6.52918 13.6084 0 21.6626 0C29.7168 0 36.2459 6.52918 36.2459 14.5833V25H37.0793C39.8407 25 42.0793 27.2386 42.0793 30V45C42.0793 47.7614 39.8407 50 37.0793 50H5.4126C2.65118 50 0.412598 47.7614 0.412598 45V30C0.412598 27.2386 2.65117 25 5.4126 25H7.07926V14.5833ZM11.2461 25H32.0794V14.5833C32.0794 8.83037 27.4157 4.16667 21.6628 4.16667C15.9098 4.16667 11.2461 8.83037 11.2461 14.5833V25ZM4.57926 31.1667C4.57926 30.0621 5.4747 29.1667 6.57926 29.1667H35.9126C37.0172 29.1667 37.9126 30.0621 37.9126 31.1667V43.8333C37.9126 44.9379 37.0172 45.8333 35.9126 45.8333H6.57926C5.4747 45.8333 4.57926 44.9379 4.57926 43.8333V31.1667Z" fill="#FFC000"/>
                    </svg>                        
                    <p class="bold">Vivre en toute sécurité</p>
                    <p>Se sentir bien et en sécurité avec ceux que l’on connait est nécessaire pour vivre en toute quiétude.<br>C’est pourquoi l’accès à la villa est sécurisé. De plus, un dispositif d’alerte permet de contacter directement le coordonnateur en permanence.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="6">
        <div class="content flexbox align between reverse">
            <div class="text">
                <div class="title">
                    <h2>Venez visiter votre future maison<div class="overline"></div></h2>
                    <h3>Retrouvez-nous ici</h3>
                </div>
                <p>35 avenue du Maréchal FOCH</br>31800 Saint-Gaudens</p>
                <p>contact@contraste-habitat.fr</p>
                <p>05 62 00 54 29<br/>06 63 00 23 47</p>
                <a href="contact.php" class="btn">Contactez-nous</a>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2912.928946730951!2d0.7150186756268718!3d43.10600808765024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a8fc885f75e5bd%3A0x6d1aa50daedd8726!2s35%20Av.%20Mar%C3%A9chal%20Foch%2C%2031800%20Saint-Gaudens!5e0!3m2!1sfr!2sfr!4v1703595805378!5m2!1sfr!2sfr" width="700" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="7" class="no-sect-gap">
        <div class="background">
            <div class="content flexbox align between">
                <div class="text">
                    <div class="title">
                        <h2>L'habitat inclusif, c'est quoi ?<div class="overline"></div></h2>
                        <h3>La cohabitation est  la clé !</h3>
                    </div>
                    <p>L’habitat inclusif est une solution de logement pour les personnes âgées et les personnes handicapées. Cette forme d’habitat constitue une alternative à la vie à domicile isolée pour certain et à la vie collective en établissement pour d’autres. Les habitants y vivent dans des logement privatifs, tout en partageant des espaces communs et un projet de vie sociale.</p>
                    <p>La cohabitation dans une même maison avec chacun son logement vous permet de favoriser les relations humaines</p>
                    <p>Maintenir votre insertion sociale dans la ville et le quartier, tout en faisant revivre votre “savoir-voisiner” est un point important de notre engagement.</p>
                </div>
                <img src="Images/groupe.jpg" alt="">
            </div>
        </div>
        <div class="background disable">
            <div class="content flexbox align between reverse">
                <div class="text">
                    <div class="title">
                        <h2>Retarder la perte d'autonomie !<div class="overline"></div></h2>
                        <h3>Restez acteur de votre vie</h3>
                    </div>
                    <p>Impliquez-vous dans la gestion de la vie quotidienne et dans les tâches qui y sont liées.</p>
                    <p>Nos intervenants vous accompagnerons pour vous aidez à repousser votre dépendance en favorisant les actes autonomes, tout en respectant vos choix. Nous vous proposerons des activités adaptées à votre (vos) problématique(s), vos besoins et vos envies.</p>
                </div>
                <img src="Images/play.jpg" alt="">
            </div>
        </div>
        <div class="background">
            <div class="content flexbox align between">
                <div class="text">
                    <div class="title">
                        <h2>De l'entraide en toute sécurité<div class="overline"></div></h2>
                        <h3>Un nouveau départ !</h3>
                    </div>
                    <p>Ce type d’hébergement vous permet de réaliser un nouveau projet de vie, basé sur une entraide mutuelle dans un cadre bienveillant, harmonieux et sécurisé.<br/>Vous n’êtes pas isolé(e), ce qui apporte un sentiment de sécurité non seulement pour vous, mais aussi pour vos proches, en favorisant une ambiance familiale.</p>
                    <p>Cette forme d’hébergement vous permet de financer vous-même les prestations, en limitant, voire évitant une contribution financière de vos proches.</p>
                </div>
                <img src="Images/aide.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="8" class="fullpage no-sect-gap" style="background-image: linear-gradient(to bottom left, rgba(0, 0, 0, 0.00) 51%, rgba(0, 0, 0, 0.75) 100%), url(Images/waw.png);">
        <div class="content">
            <div class="card grid shadow">
                <div class="title">
                    <h2>Prêt à débuter une nouvelle vie communautaire ?</h2>
                    <h3>En savoir plus !</h3>
                </div>
                <a href="contact.php" class="btn">Contactez-nous</a>
            </div>
        </div>
    </section>

    <?php
    include_once('composants/footer.php');
    ?>


    <script>
        document.querySelectorAll('span.radio').forEach(span => {
            span.addEventListener('click', function() {
                const activated = document.querySelector('.radio.active');
                activated.classList.remove('active');
                this.classList.add('active');

                const image1 = document.querySelector('.img1');
                const image2 = document.querySelector('.img2');
                const image3 = document.querySelector('.img3');

                switch (this.innerHTML) {
                    case "Studio":
                        image1.setAttribute('src', 'Images/studio_img1.jpeg');
                        image2.setAttribute('src', 'Images/studio_img2.jpeg');
                        image3.setAttribute('src', 'Images/studio_img3.jpeg');
                        break;

                    case "T1 solo":
                        image1.setAttribute('src', 'Images/T1_solo_img1.jpg');
                        image2.setAttribute('src', 'Images/T1_solo_img2.jpeg');
                        image3.setAttribute('src', 'Images/T1_solo_img3.jpeg');
                        break;
                    
                    case "T1 duo":
                        image1.setAttribute('src', 'Images/T1_duo_img1.jpg');
                        image2.setAttribute('src', 'Images/T1_duo_img2.jpg');
                        image3.setAttribute('src', 'Images/T1_duo_img3.jpg');
                        break;
                
                    default:
                        break;
                }
            })
        });
    </script>

    
</body>
</html>