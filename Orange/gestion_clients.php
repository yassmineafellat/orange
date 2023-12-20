<h2>Gestion des clients</h2>
<?php 
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
$leclient=null;

if(isset($_GET['action'])&& isset($_GET['idclient'])){
    $action = $_GET['action'];
    $idclient = $_GET['idclient'];
    switch ($action)
    {
        case "sup": $unControleur->deleteClient($idclient);break;
        case "edit": $leclient=$unControleur->selectWhereClient($idclient);break;
    }
}
    require_once ("vue/vue_insert_client.php");

    if (isset($_POST['Valider'])){
        $unControleur->insertClient($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updateClient($_POST);
        header("Location: index.php?page=2");
    }
}
    if (isset($_POST['Filtrer'])){
        $lesclients = $unControleur->selectLikeClient($_POST['filtre']);

    }else{
    //recuperation de toutes les classes
    $lesclients= $unControleur->selectAllClient();
    }
    require_once ("vue/vue_select_client.php");
?>