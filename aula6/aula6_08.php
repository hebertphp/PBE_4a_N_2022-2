<?php
//       0  1  2
$a=array(array(1,2,3),20,30);
//$a[2];//30//unidimensional

$aluno = array(
    array("TBD","Fulano",123456789),
    array("TRC","Beltrano",234567890),
    array("TADS","Sicrano",345678901) 
);
echo "<br>Curso: " . $aluno[0][0] . "<br> Nome: " . $aluno[0][1] . "<br> RA:
" . $aluno[0][2];
echo "<hr>Curso: " . $aluno[1][0] . "<br> Nome: " . $aluno[1][1] . "<br> RA:
" . $aluno[1][2];
echo "<hr>Curso: " . $aluno[2][0] . "<br> Nome: " . $aluno[2][1] . "<br> RA:
" . $aluno[2][2];

echo "<hr>".$aluno[2][1];

?>