<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/cadastrar.css">
    <title>Cadastrar Notícias</title>
</head>

<body>
   
        <header id="header">

            <div class="menu">
                <h2><img src="img/noticias.jpg" alt="noticias"></h2>
                <h2><a href="index.php"><img src="img/inicio.jpg" alt="inicio"></a></h2>
            </div>
            <h1><img src="img/CadastrarNoti.jpg" alt="CadastrarNoti"></h1>
        </header>

        <main id="main">
            <form class="form" method="POST" action="cadastrar_action.php">
                <div class="input-search">
                    <label for="inputNotice">Título da Notícia:</label>
                    <input type="text" name="notice" id="inputNotice" required>
                </div>
                <div class="input-search">
                    <label for="inputDescription">Descrição da Notícia:</label>
                    <textarea type="text" name="description" rows="5" id="inputDescription" required></textarea>
                    <div class="input-search">
                        <input type="submit" value="C A D A S T R A R">
                    </div>
                </div>
            </form>
        </main>
    
</body>

</html>