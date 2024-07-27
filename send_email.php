    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Valider les données
        if (!empty($nom) && !empty($email) && !empty($message)) {
            // Adresse email de destination
            $to = 'sylvain.mbeumou@gmail.com';

            // Sujet de l'email
            $subject = 'Nouveau message de contact';

            // Corps de l'email
            $email_content = "Nom: $nom\n";
            $email_content .= "Email: $email\n\n";
            $email_content .= "Message:\n$message\n";

            // Entêtes de l'email
            $headers = "From: $email";

            // Envoyer l'email
            if (mail($to, $subject, $email_content, $headers)) {
                echo "Merci, votre message a été envoyé.";
            } else {
                echo "Erreur : votre message n'a pas pu être envoyé.";
            }
        } else {
            echo "Erreur : tous les champs sont requis.";
        }
    } else {
        echo "Méthode de requête non autorisée.";
    }
    ?>
