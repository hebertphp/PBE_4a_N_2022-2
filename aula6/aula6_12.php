<?php
//             0        1          2               3
$nomes=array("Fulano","Beltrano","Sicrano", "Astrogildo","Bete","Belarmina","Abelarda","Deoclesia");
$total = count($nomes);//8
$ult = count($nomes)-1;
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";//Fulano
echo "Último valor do array: ".$nomes[count($nomes)-1];
echo "<hr>";
for($i=0;$i<count($nomes);$i++){
    echo $nomes[$i]."<br>";
}
?>