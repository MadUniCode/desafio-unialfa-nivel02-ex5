<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $hobbie = $_POST["hobbie"];

    // Validação do nome
    if (strlen($nome) < 6) {
        echo '<script>alert("O nome precisa ter no mínimo 6 caracteres."); window.location.href = "formulario.html";</script>';
        exit();
    }

    // Validação da idade
    if ($idade < 18) {
        echo '<script>alert("A idade precisa ser maior que 18."); window.location.href = "formulario.html";</script>';
        exit();
    }

    // Se todas as validações passarem, exibe os dados
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Hobbie: " . $hobbie . "<br>";
}
?>
