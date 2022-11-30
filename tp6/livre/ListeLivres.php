<body>
    <?php $idcon=mysqli_connect("localhost" ,"root", "");
     $okbd=mysqli_select_db($idcon ,"biblio");
    $requet="select * from livre";
     $res= mysqli_query($idcon, $requet); ?>
    <table border="1">
        <tr>
            <th> Code</th>
            <th> Titre </th>
            <th> Auteur</th>
            <th> Date edition</th>
            
        </tr>
        <?php while($ligne=mysqli_fetch_array($res)) { ?>
        <tr>
            <td>
                <?php echo $ligne[0]; ?>
            </td>
            <td>
                <?php echo $ligne[1]; ?>
            </td>
            <td>
                <?php echo $ligne[2]; ?>
            </td>
            <td>
                <?php echo $ligne[3]; ?>
            </td>
            
        </tr>
        <?php } mysqli_close($idcon); ?>
    </table>