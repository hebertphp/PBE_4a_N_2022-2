<?php
if(count($_POST)==0){
    echo "Execute primeiro o formulário";
    exit();//saia do código
}
$num=$_POST["num"];//resgatando o dado do input, name="num"
$ra=$_POST["ra"];//resgatando o dado do input, name="ra"
$nome=$_POST["nome"];//resgatando o dado do input, name="nome"

echo "<h2>Seu Ra: $ra</h2>";
echo "<h2>Nome: $nome</h2>";
// Código Par Impar com Ternário
$msg=($num%2==0)?"PAR":"ÍMPAR";
echo "$num - $msg<hr>";

// Código Par Impar com if else
if($num%2==0){
    echo "$num - Par";
}
else{
    echo "$num - Ímpar";
}
?>