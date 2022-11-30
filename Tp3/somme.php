<?php
$t=[5,5,5,5,10];
function somme($t){
    $s=0;
    for($i=0;$i<count($t);$i++){
        $s+=$t[$i];
    }
    return $s;
}
echo "somme:". somme($t);
?>
