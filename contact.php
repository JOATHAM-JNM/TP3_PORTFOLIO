<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    echo "Nom: " . $nom . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Sujet: " . $sujet . "<br>";
    echo "Message: " . $message . "<br>";

    $contenu = "Date: " . date('Y-m-d H:i:s') . "\n";
    $contenu .= "Nom: " . $nom . "\n";
    $contenu .= "Email: " . $email . "\n";
    $contenu .= "Sujet: " . $sujet . "\n";
    $contenu .= "Message: " . $message . "\n";
    $contenu .= "-------------------\n\n";

    file_put_contents('contacts.txt', $contenu, FILE_APPEND);
    echo "<br>Sauvegardé dans contacts.txt";
}else{
    echo "ERREUR";
}
?>
