<?php

include('Exemplo.class.php');

//instancia de objeto
$exemplo = new Exemplo();
//$exemplo->var = 'Ola';
$exemplo->var2 = 'Gyani';

//echo $exemplo->var2;

$exemplo2 = new Exemplo;
$exemplo2->var2 ='João';

echo $exemplo->var2;
echo '<br>';
echo $exemplo2->var2;

//STATIC quando instanciada não estara acessivel ao objeto, para chama-la usa a classe ::varx ;



?>