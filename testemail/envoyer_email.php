<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail où vous souhaitez recevoir le message
    $destinataire = "Dibou960@gmail.com";

    // Sujet de l'e-mail
    $sujet = "Nouveau message de $nom";

    // Corps du message
    $corps_message = "Nom: $nom\n";
    $corps_message .= "E-mail: $email\n";
    $corps_message .= "Message:\n$message";

    // En-têtes de l'e-mail
    $headers = "De: $email";

    // Envoyer l'e-mail
    mail($destinataire, $sujet, $corps_message, $headers);

    // Redirection après l'envoi du formulaire (vous pouvez personnaliser cette URL)
    header("Location: confirmation.html");
}
?>
