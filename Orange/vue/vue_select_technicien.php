<h3> Liste des Techniciens</h3>
<form method="post">
    Filtrer par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br/>
<table border="1">
    <tr>
        <td>Id Technicien</td>
        <td>Nom du Technicien</td>
        <td>Prenom du technicien</td>
        <td>Qualification</td>
        <td>Email</td>
        <?php 
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){
       echo '<td>Opération</td>';
}?>

    </tr>
    <?php
    if (isset($lestechniciens)){
        foreach ($lestechniciens as $untechnicien){
            echo "<tr>";
            echo "<td>" . $untechnicien['idtech'] ."</td>";
            echo "<td>" . $untechnicien['nom'] ."</td>";
            echo "<td>" . $untechnicien['prenom'] ."</td>";
            echo "<td>" . $untechnicien['qualification'] ."</td>";
            echo "<td>" . $untechnicien['email'] ."</td>";
             
if(isset($_SESSION['role']) && $_SESSION['role']=='admin'){

            echo "<td>";
            echo "<a href='index.php?page=4&action=sup&idtech=".$untechnicien['idtech']."'><img src='images/supprimer.png' height='30' width='30'></a>";
            echo "<a href='index.php?page=4&action=edit&idtech=".$untechnicien['idtech']."'><img src='images/editer.png' height='30' width='30'></a>";
            echo "</td>";
            echo"</td>";
        }
    }
    } ?>
</table>