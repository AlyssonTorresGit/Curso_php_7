<div class="titulo">Upload</div>

<?php

if ($_FILES && $_FILES['arquivo']) {
    $pastaUpload = 'C:\Users\SAUTO\Downloads\teste/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if (move_uploaded_file($tmp, $arquivo)) {
        echo "<br>Arquivo valido e enviado com cucesso";
    } else {
        echo "<br>Erro no upload de arquivo";
    }
}


?>


<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button type="submit">Enviar</button>
</form>