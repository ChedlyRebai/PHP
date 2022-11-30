<?php
function factoriel($n){
    $f=1;
    for( $i = 1 ; $i <= $n ; $i++){
        $f*=$i;
    }
    return $f;
}

echo "factorielde 5 est:" .factoriel(5);
echo "<br>";


$t=[5,5,5,5,10];
function somme($t){
    $s=0;
    for($i=0;$i<count($t);$i++){
        $s+=$t[$i];
    }
    return $s;
}
echo "somme:". somme($t);




function cardinale($n,$p){
    return factoriel($n)/(factoriel($p)*factoriel($n-$p));
}
echo "<br>";
echo "cardinale ".cardinale(5,3);





function minmax($t){
    $val=[];
    $min=$t[0];
    $max=$t[0];
    for ($i=0; $i <count($t) ; $i++) { 
        if($min>$t[$i]){
            $min=$t[$i];
        }
        if($max<$t[$i]){
            $max=$t[$i];
        }       
    }
    $val[0]=$min;
    $val[1]=$max;
    return $val;
}
$t=[4,1,9,5,5];
$newtable=[];
$newtable=minmax($t);
echo "<br>";
echo "min:".$newtable[0];
echo "<br>";
echo "max:".$newtable[1];
echo "<br>";









function concurrences($t1,$t2){
     $val=[];
     $index=0;  
     for ($i=0; $i < count($t1) ; $i++) { 
        $nb=0;      
        for ($k=0; $k < count($t2) ; $k++) {            
            if($t2[$k]==$t1[$i]){
                $nb++;
            }           
        }
        $val[$index]=$nb;
        $index++;
    }
    return $val;
 }

 $t2=[];
 for ($i=0; $i<21  ; $i++) { 
    $t1[$i]=$i;
 }
 for ($i=0; $i < 25; $i++) { 
     $t2[$i]=rand(0,20);   
 }
 $arr=[];
 $arr=concurrences($t1,$t2);
 for ($i=0; $i < count($t1); $i++) {     
     echo $t1[$i].":" ;  
     echo $arr[$i] ." /";       
    }
echo "<br>";











 $tab=["php5@free.com","jean5@fiscali.fr","abc@waladoo.fr"
 ,"saleh@waladoo.fr","paul@fiscali.fr","darine@fiscali.fr"];
 $newtab=[];
for ($i=0; $i < count($tab); $i++) { 
    $email=explode("@",$tab[$i]);
    $server=explode(".",$email[1]);
    $newtab[$i]=$server[0];
}
print_r($newtab);


?>