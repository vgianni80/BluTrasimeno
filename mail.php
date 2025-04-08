<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Controlla se è una richiesta POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati dal form
    $nome = isset($_POST['nome']) ? filter_var($_POST['nome']) : '';
    $email_mittente = isset($_POST['email']) ? filter_var($_POST['email']) : '';
    $messaggio_utente = isset($_POST['messaggio']) ? filter_var($_POST['messaggio']) : '';
    $language = isset($_POST['language']) ? $_POST['language'] : 'it';
    
    // Validazione dei dati
    if (empty($nome) || empty($email_mittente) || empty($messaggio_utente)) {
        echo ($language === 'it') ? "Tutti i campi sono obbligatori." : "All fields are required.";
        exit;
    }
    
    if (!filter_var($email_mittente, FILTER_VALIDATE_EMAIL)) {
        echo ($language === 'it') ? "Indirizzo email non valido." : "Invalid email address.";
        exit;
    }
    
    // Destinatario
    $to = "vgianni80@gmail.com"; // Email del destinatario
    
    // Oggetto dell'email (in base alla lingua)
    $subject = ($language === 'it') 
        ? "Nuovo messaggio da Blu Trasimeno - " . $nome 
        : "New message from Blu Trasimeno - " . $nome;
    
    // Mittente
    $sender = "postmaster@blutrasimeno.it";
    
    // Genera un boundary
    $mail_boundary = "=_NextPart_" . md5(uniqid(time()));
    
    // Intestazioni
    // $headers = "From: $email_mittente\n";
    // $headers .= "Reply-To: $email_mittente\n";
    // $headers .= "MIME-Version: 1.0\n";
    // $headers .= "Content-Type: multipart/alternative;\n\tboundary=\"$mail_boundary\"\n";
    // $headers .= "X-Mailer: PHP " . phpversion();

    $headers = "From: $email_mittente\r\n";
    $headers .= "Reply-To: $email_mittente\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/alternative;\r\n\tboundary=\"$mail_boundary\"\r\n";

    
    // Preparazione del messaggio
    $testo_email = ($language === 'it')
        ? "Hai ricevuto un nuovo messaggio dal sito Blu Trasimeno.\n\n"
        : "You have received a new message from the Blu Trasimeno website.\n\n";
    
    $testo_email .= ($language === 'it')
        ? "Nome: $nome\nEmail: $email_mittente\n\nMessaggio:\n$messaggio_utente"
        : "Name: $nome\nEmail: $email_mittente\n\nMessage:\n$messaggio_utente";
    
    // Versione HTML del messaggio
    $html_email = ($language === 'it')
        ? "<p><strong>Hai ricevuto un nuovo messaggio dal sito Blu Trasimeno.</strong></p>"
        : "<p><strong>You have received a new message from the Blu Trasimeno website.</strong></p>";
    
    $html_email .= "<p><strong>" . ($language === 'it' ? "Nome" : "Name") . ":</strong> $nome<br>"
                . "<strong>Email:</strong> $email_mittente</p>"
                . "<p><strong>" . ($language === 'it' ? "Messaggio" : "Message") . ":</strong><br>"
                . nl2br($messaggio_utente) . "</p>";
    
    // Costruisci il corpo del messaggio da inviare
    $msg = "This is a multi-part message in MIME format.\n\n";
    $msg .= "--$mail_boundary\n";
    $msg .= "Content-Type: text/plain; charset=\"utf-8\"\n";
    $msg .= "Content-Transfer-Encoding: 8bit\n\n";
    $msg .= $testo_email;  // Messaggio in formato testo
    
    $msg .= "\n--$mail_boundary\n";
    $msg .= "Content-Type: text/html; charset=\"utf-8\"\n";
    $msg .= "Content-Transfer-Encoding: 8bit\n\n";
    $msg .= $html_email;  // Messaggio in formato HTML
    
    // Boundary di terminazione multipart/alternative
    $msg .= "\n--$mail_boundary--\n";
       
    // Invia il messaggio, il quinto parametro "-f$sender" imposta il Return-Path su hosting Linux
    if (mail($to, $subject, $msg, $headers, "-f$sender")) {
        // Successo
        echo ($language === 'it') ? "Messaggio inviato con successo!" : "Message sent successfully!";
    } else {
        // Errore
        echo ($language === 'it') ? "Errore nell'invio dell'email." : "Error sending email.";
    }
} else {
    // Non è una richiesta POST
    echo "Metodo non consentito.";
}
?>