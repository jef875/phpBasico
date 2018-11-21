<?php
$frase = "    jefferson é lindo pra carai kkkk      ";
$num = strlen(trim($frase)); //strlen-> conta quantas letras tem uma palávra trim-> elimina os espaços do começo e do fim
$count  = str_word_count($frase); //str_word_count-> conta quantas palávras existem na frase

echo "A frase $frase tem $num letras e $count palávras.";


/*
$prod = "leite";
$preco = 4.5;
printf("O preço do %s é %.2f <br>", $prod, $preco);
//função wordwrap

$texto  = "Aqui temos um texto grande que será quebrado com a função wordwrap";
$quebra = wordwrap($texto, 5, "<br>\n", false); //$texto = a variável armazena todo o texto 
												//5 = as palavras com 5 letrar
												//false = não corta as palavras no meio
echo($quebra);*/
//trim(); elimina 
//str_word_count();

?>