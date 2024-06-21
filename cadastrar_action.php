<?php
require "conexao.php";

$title_notice = filter_input(INPUT_POST, 'notice');
$description_notice = filter_input(INPUT_POST, 'description');

if ($title_notice && $description_notice) {
    $sql = $pdo->prepare("INSERT INTO notice (title_notice, description_notice) VALUES (:notice, :description)");
    $sql->bindValue(':notice', $title_notice);
    $sql->bindValue(':description', $description_notice);
    $sql->execute();

    echo "
        <script>
            alert('Cadastrado Com Sucesso!');
            window.location.href = 'index.php';
        </script>
    ";
    exit;
} else {
    echo "
        <script>
            alert('Por favor preencha todos os campos!');
            window.location.href = 'cadastrar.php';
        </script>
    ";
    exit;
}
?>