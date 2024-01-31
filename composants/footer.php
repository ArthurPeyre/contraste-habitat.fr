<footer class="background">
    <div class="content grid">
        <div class="flexbox center">
            <div class="grid" style="width: min(100%, 290px);">
                <p class="bold">Inscrivez-vous à notre Newsletter gratuitement !</p>
                <form action="" method="post" class="grid">
                    <input type="email" name="email" id="" placeholder="Email">
                    <input type="submit" value="S'inscrire gratuitement" class="btn">
                </form>
            </div>
            <div class="grid">
                <p class="bold">Contactez-nous</p>
                <p style="text-wrap: nowrap;">
                    Contraste Habitat<br>
                    35 avenue du Maréchal FOCH<br>
                    31800 Saint-Gaudens<br>
                    contact@contraste-habitat.fr<br>
                    05 62 00 54 29
                </p>
                <a href="contact.php" class="bold">Formulaire de contact</a>
            </div>
        </div>
        <!-- <ul class="flexbox align center">
            <li><a href="">Mentions légales</a></li>
            <li><a href="">Protection des données</a></li>
        </ul> -->
        <p class="grid center">Copyright © 2023 Contraste Habitat - site conçu par Arthur Peyre</p>
    </div>
</footer>


    <script>
        function adjustOverlineWidth() {
            // Récupérez l'élément de classe "content"
            var contentElement = document.querySelector('.content');
            
            // Récupérez la valeur de la marge à partir du style calculé
            var computedStyle = window.getComputedStyle(contentElement);
            var marginLeft = parseFloat(computedStyle.getPropertyValue('margin-left'));
            
            // Affichez les valeurs de la marge dans la console
            console.log('Marge gauche : ' + marginLeft);
            
            document.querySelectorAll('.overline').forEach(overline => {
                overline.style.width = `calc(100% + ${marginLeft}px + 20px + var(--padding))`;
            });
        }

        // Appeler la fonction lors du chargement de la page
        window.addEventListener('load', adjustOverlineWidth);

        // Appeler la fonction lors du redimensionnement de la fenêtre
        window.addEventListener('resize', adjustOverlineWidth);
    </script>

<?php
if (isset($_POST["email"])) {
    // Récupérez l'adresse e-mail soumise dans le formulaire
    $email = $_POST["email"];

    $servername = "127.0.0.1:3306"; // Adresse du serveur de base de données
    $username = "u355954754_ayicoCodeBreak"; // Nom d'utilisateur de la base de données
    $password = "BoraBora64200!"; // Mot de passe de la base de données
    $database = "u355954754_codebreaker"; // Nom de la base de données

    try {
        // Créer une connexion à la base de données avec PDO
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

        // Définir le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Préparez et exécutez la requête SQL pour insérer l'adresse e-mail dans la table "clients"
        $stmt = $conn->prepare("INSERT INTO clients (id, email) VALUES (NULL, :email)");
        $stmt->bindParam(":email", $email);

        // Vérifiez si l'insertion a réussi
        if ($stmt->execute()) {
            echo "Adresse e-mail enregistrée avec succès !";
        } else {
            echo "Erreur lors de l'enregistrement de l'adresse e-mail.";
        }

    } catch (PDOException $e) {
        echo "La connexion à la base de données a échoué : " . $e->getMessage();
    }

    // Fermez la connexion à la base de données
    $conn = null;
}
?>

