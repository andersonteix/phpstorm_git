<?php
/**
 * Created by PhpStorm.
 * User: filos
 * Date: 03/01/2017
 * Time: 20:48
 */

$array1 = array('a','r','a','r', 'a');
$array2 = array('a', 'r', 'a', 'r', 'a');

$contador = count($array1);
$array_invertido = array_reverse($array2);
$naoPalindromo = false;

//foreach ($array_invertido as $item=>$value){
//    echo "$item=>$value \n";
//}

for ($i=0; $i < $contador; $i++){
   if ($array1[$i] != $array_invertido[$i]){
       $naoPalindromo=true;
       break;
   }else{
       continue;
   }
}

if ($naoPalindromo){
    echo "A palavra não é Palindromo";
}else{
    echo "A palavra é Palindromo";
}

