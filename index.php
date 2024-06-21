<?php
    require "conexao.php";

    $lista = [];

    $sql = $pdo->query("SELECT * FROM notice ORDER BY id DESC");

    if ($sql->rowCount() > 0 ) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
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
    <link rel="stylesheet" href="css/home.css">   
    <link rel="stylesheet" href="css/cadastrar.css">   
    <title>Notícias</title>
</head>
<body>
    <div class="container">
        <header id="header">
            <div class="menu">
                <h2><img src="img/noticias.jpg" alt="Noticias"></h2>
                <h2><a href="cadastrar.php"><img src="img/cadastrar.jpg" alt="Cadastrar"></a></h2>
            </div>
            <h1><img src="img/feed.jpg" alt="feed"></h1>
        </header>

        <main class="container-post">
            <?php if (!empty($lista)): ?>
                <?php foreach ($lista as $notice): ?>

                    <div class="post">
                        <div class="top-post menu">
                            <span><?= date_format(new DateTime($notice['date_create']), 'd/m/Y') ?></span>
                            <a href="./editar.php?id=<?= $notice["id"]; ?>">
                                <img src="./img/editar.png" alt="Editar registro">
                            </a>
                            <a href="./excluir.php?id=<?= $notice["id"]; ?>">
                                <img src="./img/excluir.png" alt="excluir registro">
                            </a>
                        </div>
                        
                        <div class="content-post">
                            <h3><?= $notice['title_notice'] ?></h3>
                            <p><?= $notice['description_notice'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhuma notícia encontrada.</p>
            <?php endif; ?>
        </main>
    </div>
</body>
</html>

