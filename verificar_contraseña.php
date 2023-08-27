<?php
$contraseña_correcta = "agustitogustavo"; // Cambia esto a tu contraseña real

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password_ingresada = $_POST["password"];

    if ($password_ingresada === $contraseña_correcta) {
        // Contraseña correcta, redirige a la página protegida
        header("Location: pagina_protegida.html");
        exit();
    } else {
        echo "Contraseña incorrecta. Intenta de nuevo.";
    }
}
?>
