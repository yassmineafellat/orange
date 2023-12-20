<h2>Gestion des Produit</h2>
<?php 
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
$lesclients=$unControleur->selectAllClient();
$leproduit=null;

if(isset($_GET['action'])&& isset($_GET['idproduit'])){
    $action = $_GET['action'];
    $idproduit = $_GET['idproduit'];
    switch ($action)
    {
        case "sup": $unControleur->deleteProduit($idproduit);break;
        case "edit": $leproduit=$unControleur->selectWhereProduit ($idproduit);break;
    }
}
    require_once ("vue/vue_insert_produit.php");

    if (isset($_POST['Valider'])){
        $unControleur->insertProduit($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updateProduit($_POST);
        header("Location: index.php?page=2");
    }
}
    if (isset($_POST['Filtrer'])){
        $lesproduits = $unControleur->selectLikeProduit($_POST['filtre']);

    }else{
    //recuperation de toutes les classes
    $lesproduits= $unControleur->selectAllProduit();
    }
    require_once ("vue/vue_select_produit.php");
?>
