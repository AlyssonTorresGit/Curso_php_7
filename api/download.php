<div class="titulo">Download</div>

<?php
session_start();

$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br> Arquvo valido e enviado com sucesso";
    $arquivos[] = $nomeArquivo;
    $_SESSION['ARQUIVOS'] = $arquivo;
} else {
    echo '<br> erro no upload de arquivo.';
}
?>


<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach ($arquivos as $arquivo): ?>
    <li>
        <a href="../file/<?= $arquivo ?>">
            <?= $arquivo ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>

<style>
input,
button {
    font-size: 1.2rem;
}
</style>