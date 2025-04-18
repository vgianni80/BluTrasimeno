<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanifica i dati in ingresso
    $name = htmlspecialchars(trim($_POST["nome"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $subject = "Email dal sito"; // htmlspecialchars(trim($_POST["subject"] ?? ''));
    $message = htmlspecialchars(trim($_POST["messaggio"] ?? ''));

    // Validazione
    if (!$name || !$email || !$subject || !$message) {
        echo "Tutti i campi sono obbligatori.";
        exit;
    }

    // Verifica email valida
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Indirizzo email non valido.";
        exit;
    }

    // Email destinatario (modifica con il tuo indirizzo)
    $to = "vgianni80@gmail.com";

    // Preparazione email
    $email_subject = "Contatto dal sito";
    $email_body = "Hai ricevuto un nuovo messaggio:\n\n".
                  "Nome: $name\n".
                  "Email: $email\n\n".
                  "Messaggio:\n$message";

    $headers  = 'MIME-Version: 1.0' . "\r\n"; 			
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
    $headers .= "From: $name <info@blutrasimeno.it>";

    // Invio
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Email inviata con successo!";
    } else {
        echo "Errore nell'invio dell'email.";
    }
} else {
    echo "Metodo non consentito.";
}
?>