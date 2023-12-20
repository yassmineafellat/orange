<center>
    <h2>GESTION DES TECHNICIENS</h2>
    <?php
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
    $letechnicien=null;
    if (isset($_GET['action']) && isset($_GET['idtech'])) {
        $action = $_GET['action'];
        $idtech= $_GET['idtech'];
        switch($action) {
            case "sup" : $unControleur->deleteTechnicien($idtech); 
            break;
            case "edit" : $letechnicien= $unControleur -> selectWhereTechnicien($idtech);
            break;
        }
    }
    require_once ("vue/vue_insert_technicien.php");


if (isset($_POST['Modifier'])){
    $unControleur->updateTechnicien ($_POST);
    header("Location: index.php?page=4");

}
if (isset($_POST['Valider'])) {
            //envoi des donnes au controleur

    $unControleur->insertTechnicien ($_POST);
    }
    //recup de tt mes idtechs
}
if (isset($_POST['Filtrer'])){
   $lestechniciens =$unControleur->selectLikeTechnicien ($_POST['filtre']);
} else {

    $lestechniciens=$unControleur->selectAllTechnicien();
}
    require_once("vue/vue_select_technicien.php");


    ?>