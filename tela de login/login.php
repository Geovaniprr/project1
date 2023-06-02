<?php
if (isset($_POST["submit"])) {
    $usuario = $_POST["email"];
    $password = $_POST["senha"];

    if (($usuario == "admin" || $usuario == "admin@fito.br") && $password == "12345") {
        echo "<span style='color: green;'>Olá, Admin! Acesso concedido! Divirta-se explorando nosso sistema!.</span>";
    } else {
        echo "<span style='color: red;'>Acesso negado! Verifique suas informações e tente novamente!</span>";
    }
}
