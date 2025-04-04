<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "diahmaulida555@gmail.com";
    $subject = "Pesan dari " . $_POST['name'];
    $message = "Nama: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n\n";
    $message .= "Pesan:\n" . $_POST['message'];
    $headers = "From: " . $_POST['email'];

    if(mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Pesan terkirim!'); window.location.href = 'index.html#contact';</script>";
    } else {
        echo "<script>alert('Gagal mengirim pesan!'); window.location.href = 'index.html#contact';</script>";
    }
}
?>