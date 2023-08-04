<!-- todo arquivo PHP precisa de um start -->
<?php

// Jamais esquecer o ; no final, dá erro se não colocar
// ele também tem tipagens mas não tão fortemente como JS
// criando variáveis em PHP
// igual let name =  "testoncio"
$name = "Maria";
$boasVindas = "Bem vindo ao PHP";

echo $boasVindas  . $name . "  boa";
echo "<h1>testando123</h1>";

// temos ifs, loops, ternário, etc

// Condicionais
// if($name == " testoncio"){
//     echo "Olá" . $name;
// }elseif($name == "Maria"){
//     echo "Olá Maria";
// }else{
//     echo "Olá outra pessoa";
// }

// Ternário
echo $name == "Maria" ? "Olá Maria<br>" : "Olá Outra Pessoa<br>";

$newName = ($name) ?: " sem nome <br>";

echo $newName . "<br>" ;

// Listas
$numeros = array('1', 'A', 'D');
$numerosOutraSintaxe = ['1', 'A', 'D'];

echo $numeros[0];

// transforma o array em string
echo print_r($numeros) . "<br>";
echo print_r($numerosOutraSintaxe) . "<br>";