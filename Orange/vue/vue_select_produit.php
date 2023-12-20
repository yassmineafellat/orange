<h3> Liste des clients</h3>
<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
    <tr>
        <td>idproduit</td>
        <td>Désignation</td>
        <td>Prix </td>
        <td>Etat</td>
        <td>Date de l'achat</td>
        <td>Client n°</td>
        <?php 
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
       echo '<td>Opération</td>';
}?>

    </tr>
    <?php
    if (isset($lesproduits)){
        foreach ($lesproduits as $unproduit){
            echo "<tr>";
            echo "<td>" . $unproduit['idproduit'] ."</td>";
            echo "<td>" . $unproduit['designation'] ."</td>";
            echo "<td>" . $unproduit['prixachat'] ."</td>";
            echo "<td>" . $unproduit['etat'] ."</td>";
            echo "<td>" . $unproduit['dateachat'] ."</td>";
            echo "<td>" . $unproduit['idclient'] ."</td>";
             
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){


            echo "<td>";
            echo "<a href='index.php?page=3&action=sup&idproduit=".$unproduit['idproduit']."'><img src='images/supprimer.png' height='30' width='30'></a>";
            echo "<a href='index.php?page=3&action=edit&idproduit=".$unproduit['idproduit']."'><img src='images/editer.png' height='30' width='30'></a>";
            echo "</td>";
            echo"</td>";
}
        }
    } ?>
</table>
