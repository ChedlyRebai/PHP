<?php class user 
{ 
    /* attributs de la classe utilisateur*/
    public $codelivre;
    public $titre;
    public $auteur;
    public $dateedition;
    
    
      /* Constructeur de la classe */ 
    function __construct() {}

    function listusers() { 
        require_once('config.php'); 
        $cnx=new connexion(); 
        $pdo=$cnx->CNXbase(); 
        $req="SELECT * FROM livre"; 
        $res=$pdo->query($req); 
        return $res; 
    }

    function insertuser() { 
        require_once('config.php');
        $cnx=new connexion(); 
        $pdo=$cnx->CNXbase(); 
        // $req="insert into personne(id,nom) values ($this->user_id,'$this->user_nom')"; 

        $req= "INSERT INTO `livre` (`Codelivre`, `Titre`, `Auteur`, `DateEdition`) 
        VALUES ('$this->codelivre', '$this->titre', '$this->auteur', '$this->dateedition')";
        $pdo->exec($req); 
    } 
        
    function recherche_user($codelivre,$titre,$auteur,$dateedition) { 
    require_once('config.php'); 
    $cnx=new connexion(); 
    $pdo=$cnx->CNXbase(); 
    $req= "SELECT count(*) FROM livre WHERE Codelivre=$codelivre AND Titre=$titre AND Auteur=$auteur AND DateEdition=$dateedition " ; 
    $res=$pdo->query($req); 
    return $res; 
    }


function supprimer_user($code) { 
    require_once('config.php'); 
    $cnx=new connexion(); 
    $pdo=$cnx->CNXbase(); 
    $req="DELETE FROM livre WHERE Codelivre=$code"; 
    $pdo->exec($req); 
    } 
    
function getuser($code) { 
    require_once('config.php'); 
    $cnx=new connexion(); 
    $pdo=$cnx->CNXbase();
    $req="SELECT Codelivre, Titre, Auteur, DateEdition FROM livre where codelivre=$code"; 
    $res=$pdo->query($req); 
    $row =$res->fetch() ; 
    return $row; 
    } 
function modifier_user($code, $titre,$auteur,$classe) { 
    require_once('config.php'); 
    $cnx=new connexion(); 
    $pdo=$cnx->CNXbase(); 
    require_once('config.php'); 
    $req="UPDATE livre SET Codelivre='$code' , Titre ='$titre' ,Auteur='$auteur' WHERE codelivre=$code "; 
    $pdo->exec($req); 
    }
    
}

?>