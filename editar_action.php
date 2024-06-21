<?php
    require "conexao.php";

    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $title_notice = filter_input(INPUT_POST, 'notice');
    $description_notice = filter_input(INPUT_POST, 'description');

    if ($id && $title_notice && $description_notice) {
        $sql = $pdo->prepare("UPDATE notice SET title_notice = :notice, description_notice = :description WHERE id = :id");
        $sql->bindValue(':notice', $title_notice);
        $sql->bindValue(':description', $description_notice);
        $sql->bindValue(':id', $id);
        $sql->execute();

        echo "
            <script>
                alert('Atualizado com sucesso!');
                window.location.href = 'index.php';
            </script>
        ";
        exit;
    } else {
        echo "
            <script>
                alert('Preencha todos os campos!');
                window.location.href = 'editar.php?id=$id';
            </script>
        ";
        exit;
    }
?>
