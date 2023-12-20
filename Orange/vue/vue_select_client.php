<h3> Liste des clients</h3>
<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br/>
<table border="1">
    <tr>
        <td>Id client</td>
        <td>Nom du client</td>
        <td>Prenom du client</td>
        <td>Adressse du client</td>
        <td>Email du client</td>
        <?php 
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
       echo '<td>Opération</td>';
}?>
    </tr>
    <?php
    if (isset($lesclients)){
        foreach ($lesclients as $unclient){
            echo "<tr>";
            echo "<td>" . $unclient['idclient'] ."</td>";
            echo "<td>" . $unclient['nom'] ."</td>";
            echo "<td>" . $unclient['prenom'] ."</td>";
            echo "<td>" . $unclient['adresse'] ."</td>";
            echo "<td>" . $unclient['email'] ."</td>";
            if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
            echo "<td>";
            echo "<a href='index.php?page=2&action=sup&idclient=".$unclient['idclient']."'><img src='images/supprimer.png' height='30' width='30'></a>";
            echo "<a href='index.php?page=2&action=edit&idclient=".$unclient['idclient']."'><img src='images/editer.png' height='30' width='30'></a>";
            echo "</td>";
            echo"</td>";
            }
        }
    } ?>
</table>