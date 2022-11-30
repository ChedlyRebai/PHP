<?php
$classe=$_POST['classe'];
$f=fopen("./fichier.txt","r");

echo "<table border='1'>";
while(!(feof($f))) {
$l=fgets($f,255);
//echo($l);
    if($l){
        $t=explode("#",$l);
        if($t[2]==$classe){
        echo "<tr><td>".$t[0]."</td><td>".$t[1]."</td></tr>";
    }
    }
}
echo "</table>";
fclose($f);



?>



