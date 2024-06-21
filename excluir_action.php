<?php
require "conexao.php";

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

if ($id) {
    $sql = $pdo->prepare("DELETE FROM notice WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    echo "
        <script>
            alert('Excluído com sucesso!');
            window.location.href = 'index.php';
        </script>
    ";
    exit;
} else {
    echo "
        <script>
            alert('ID inválido!');
            window.location.href = 'index.php';
        </script>
    ";
    exit;
}
?>
