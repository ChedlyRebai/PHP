
    <form>  
        <select name="classe" id="">
            <?php
            $f=fopen("classe.txt","r");
            while(!feof($f)){
                $l=fgets($f,255);
                if($l){
                    echo "<option value=".$l.">".$l."</option>";
                }
            }
            ?>
        </select>
        
    </form>
