<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

if (isset($dados[0])) {
    var_dump($dados[0]);
} else {
    echo 'Indice [0] não existe<br>';
}

if (isset($dados['outra_informacao'])) {
    var_dump($dados('outra_informacao'));
} else {
    echo 'chave "outra_informacao" não existe<br>';
}



print_r($dados);

var_dump($dados[0]);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados["outra_informacao"]);

$lista = array(
    "a",  // indice 0
    "cinco" => "b",
    "c", // indice 1
    8 => "d", // indice 8
    "e", // indice 9
    6 => "f", // indice 6
    "g", // indice 10
    8 => "h" // indice 8
);

echo '<br>';
print_r($lista); //imprime o array estruturado

$lista[] = 'i';
echo '<br>';
print_r($lista);

$lista['vinte'] = 'j';
echo '<br>';
print_r($lista);
