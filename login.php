<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP 7</title>
</head>

<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP 7</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <h3>identifique-se</h3>
            <?php if ($_SESSION['erros']): ?>
            <div class="erros">
                <?php foreach ($_SESSION['erros'] as $erro): ?>
                <p><?php $erro ?></p>
                <?php endforeach ?>
            </div>
            <?php endif ?>
            <form action="#" method="post"></form>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>

</html>