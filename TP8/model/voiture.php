    <?php
    require_once("modele.php");

    class Voiture extends Modele{
        private $idvoiture,$numserie,$marque,$carburant,$prixlocation;
        function __construct()
        {
            parent::__construct();
        }

    

    function insert($numserie,$marque,$carburant,$prixlocation){
        $query="INSERT INTO `client` ( `ncin`, `nom`, `prenom`, `telephone`) VALUES ( ?, ?, ?, ?)";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($numserie,$marque,$carburant,$prixlocation));
    }

     
    function delete($idvoiture){
        $query="DELETE FROM `voiture` WHERE idvoiture= ?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idvoiture));
    }

    function liste(){
        $query="SELECT * FROM voiture";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    }
    
    ?>