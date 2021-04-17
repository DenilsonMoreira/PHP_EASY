<?php
# Na dúvida sempre leia o manual
# https://www.php.net/manual/pt_BR/function.echo.php
# https://www.php.net/manual/pt_BR/function.print-r
# https://www.php.net/manual/pt_BR/function.print

$texto = "Hello my friend";
$array = array('a','b','c');
$quebra_de_linha = "<br>";

###############################
# 1º) Usando a variável $texto

echo $texto; 
echo $quebra_de_linha;
#Hello my friend

print_r($texto);
echo $quebra_de_linha;
#Hello my friend

print($texto);
echo $quebra_de_linha;
#Hello my friend

###############################
# 2º) Usando a variável $array

echo $array;
echo $quebra_de_linha;
#Array 
# O echo não consegue exibir array's a menos que você inclua chave do array

echo $array[0];
echo $quebra_de_linha;
#a

print($array);
echo $quebra_de_linha;
#Array

print($array[1]);
echo $quebra_de_linha;
#b

print_r($array);
echo $quebra_de_linha;
# Array ( [0] => a [1] => b [2] => c )

# (<pre>) é a tag utilizada para representar texto pré-formatado. 
# Um texto dentro desse elemento é tipicamente exibido em uma fonte não proporcional da 
# mesma maneira em que o texto original foi disposto no arquivo. Espaços em branco são 
# mantidos no texto da mesma forma em que este foi digitado.  

echo "<pre>";
print_r($array);
echo "</pre>";

/*
Array
(
    [0] => a
    [1] => b
    [2] => c
)
*/

?>
