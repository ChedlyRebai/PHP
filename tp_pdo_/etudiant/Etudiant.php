<?php class user 
{ 
    /* attributs de la classe utilisateur*/
    public $codeetudiant;
    public $nom;
    public $classe;
    public $adresse;
    public $prenom;
    
      /* Constructeur de la classe */ 
    function __construct() {}

    function listusers() { 
        require_once('config.php'); 
        $cnx=new connexion(); 
        $pdo=$cnx->CNXbase(); 
        $req="SELECT * FROM etudiant"; 
        $res=$pdo->query($req); 
        return $res; 
    }


    function insertuser() { 
        require_once('config.php');
        $cnx=new connexion(); 
        $pdo=$cnx->CNXbase(); 
        // $req="insert into personne(id,nom) values ($this->user_id,'$this->user_nom')"; 
        $req="INSERT INTO `etudiant` (`CodeEtudiant`, `Nom`, `Prenom`, `Adresse`, `Classe`) VALUES
         ($this->codeetudiant, $this->nom, '$this->prenom', '$this->adresse', '$this->classe');";
        $pdo->exec($req); 
    } 
        
    function recherche_user($codeetudiant) { 
    require_once('config.php'); 
    $cnx=new connexion(); 
    $pdo=$cnx->CNXbase(); 
    $req= "SELECT count(*) FROM etudiant WHERE codeetudiant=$codeetudiant " ; 
    $res=$pdo->query($req); 
    return $res; 
    }


function supprimer_user($code) { 
    require_once('config.php'); 
    $cnx=new connexion(); 
    $pdo=$cnx->CNXbase(); 
    $req="DELETE FROM etudiant WHERE codeetudiant=$code"; 
    $pdo->exec($req); 
    } 
function getuser($code) { 
    require_once('config.php'); 
    $cnx=new connexion(); 
    $pdo=$cnx->CNXbase();
    $req="SELECT codeetudiant,nom,prenom,adresse,classe FROM etudiant where codeetudiant=$code"; 
    $res=$pdo->query($req); 
    $row =$res->fetch() ; 
    return $row; 
    } 
function modifier_user($code, $nom,$prenom,$classe) { 
    require_once('config.php'); 
    $cnx=new connexion(); 
    $pdo=$cnx->CNXbase(); 
    require_once('config.php'); 
    $req="UPDATE etudiant SET Nom='$nom' , Prenom ='$prenom' ,Classe='$classe' WHERE codeetudiant=$code "; 
    $pdo->exec($req); 
    }
    
}

?>