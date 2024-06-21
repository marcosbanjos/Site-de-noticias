<?php
require "conexao.php";

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM notice WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $notice = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        echo "Notícia não encontrada!";
        exit;
    }
} else {
    echo "ID inválido!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/cadastrar.css">
    <title>Editar Notícias</title>
</head>

<body>
    <header id="header">
        <div class="menu">
            <h2><img src="img/noticias.jpg" alt="Noticias"></h2>
            <h2><a href="index.php"><img src="img/inicio.jpg" alt="inicio"></a></h2>
        </div>
        <h1><img src="img/excluirNoti.jpg" alt="excluirNoti"></h1>
    </header>

    <main id="main">
        <form class="form" method="POST" action="excluir_action.php">
            <input type="hidden" name="id" value="<?= $notice['id'] ?>">
            <div class="input-search">
                <label for="inputNotice">Título da Notícia:</label>
                <input type="text" name="notice" id="inputNotice" value="<?= $notice['title_notice'] ?>" required disabled>
            </div>
            <div class="input-search">
                <label for="inputDescription">Descrição da Notícia:</label>
                <textarea name="description" rows="5" id="inputDescription" required disabled><?= $notice['description_notice'] ?></textarea>
                <div class="input-search">
                    <input type="submit" value="E X C L U I R">
                </div>
                
            </div>
        </form>
            
    </main>
</body>

</html>