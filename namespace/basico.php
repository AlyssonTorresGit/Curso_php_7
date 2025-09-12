<?php

namespace contexto;
?>

<div class="titulo"></div>

<?php
echo __NAMESPACE__ . '<br>';
const constante1 = 123;
define('contexto\constante2', 234);
// ou
define(__NAMESPACE__ . '\constante3', 345);
define("outro_contexto\constante4", 456);
