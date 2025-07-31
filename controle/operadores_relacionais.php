<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); // true / igual
var_dump(1 > 1); // false
var_dump(1 >= 1); // true
var_dump(4 < 23); // true
var_dump(1 <= 7); // true
var_dump(1 != 1); // false / diferente
var_dump(1 <> 1); // false / diferente

var_dump(111 == '111'); // true /igual
var_dump(111 === '111'); // false /estritamente iguais tan o valor como o tipo
var_dump(111 != '111'); // false /diferente
var_dump(111 !== '111'); // true / estritamente diferentes nas duas condições valor e tipo

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 15;
if ($idade < 18) {
    echo "Menor de idade = $idade anos!<br>";
} elseif ($idade <= 65) {
    echo "Adulto = $idade anos<br>!";
} else {
    echo "Terceira idade = $idade anos!<br>";
}

$idade = 25;
if ($idade < 18) {
    echo "Menor de idade = $idade anos!<br>";
} else if ($idade <= 65) {
    echo "adulto = $idade anos!<br>";
} else {
    echo "terceira idade = $idade anos!<br>";
}

$idade = 70;
if ($idade < 18) {
    echo "Menor de idade = $idade anos!<br>";
} else if ($idade <= 65) {
    echo "Adulto = $idade anos!<br>";
} else {
    echo "Terceira idade = $idade anos!<br>";
}


echo '<p class="divisao">Spaceship</p><hr>';
var_dump(500 <=> 3); // 1 o promeoiro é maior vai ternoar int 
var_dump(50 <=> 50); // vai retornar 0 pq é igual
var_dump(5 <=> 50); //  -1 segundo maior 


echo '<p class="divisao">Valores pode ser V ou F</p><hr>';
var_dump(!!5); // dupla negação !!
var_dump(!!0);
var_dump(!!""); //false
var_dump(!!" "); //true


empty()