<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    $dogruEmail = "b2412100001@sakarya.edu.tr";
    $dogruSifre = "b2412100001";

    if ($email === $dogruEmail && $password === $dogruSifre) {
        echo "<!DOCTYPE html>
        <html lang='tr'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='refresh' content='3;url=anasayfa.html'>
            <title>Giriş Başarılı</title>
        </head>
        <body style='text-align:center; margin-top: 50px; font-family: Arial, sans-serif;'>
            <h2>Hoşgeldiniz <strong>$password</strong>, giriş başarılı!</h2>
            <p>Ana sayfaya yönlendiriliyorsunuz...</p>
        </body>
        </html>";
    } else {
        header("Location: index.html");
        exit();
    }
} else {
    header("Location: index.html");
    exit();
}
?>
