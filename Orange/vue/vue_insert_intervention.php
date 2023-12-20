<center>

    <h3>Ajout d'une intervention</h3>

    <form method="post">

        <table>
            <tr>
                <td>Date de l'intervention :</td>

                <td><input type="date" name="dateinter" value= "<?= ($lIntervention!=null) ? $lIntervention['dateinter']  :'' ?>"></td>
            </tr>
            <tr>
                <td>Prix intervention:</td>

                <td><input type="text" name="prixinter" value= "<?= ($lIntervention !=null) ? $lIntervention['prixinter'] : '' ?>"></td>
            </tr>
            <tr>
                <td>Rapport :</td>

                <td><input type="text" name="rapport" value= "<?= ($lIntervention !=null) ? $lIntervention['rapport'] : '' ?>"></td>

            </tr>

            <tr>
                <td> Produit :</td>
                <td> <select name="idproduit">
                        <?php
                        foreach ($lesproduits as $unproduit){
                            echo "<option value ='".$unproduit['idproduit']."'>";
                            echo $unproduit['designation'];
                            echo"</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td> Technicien :</td>
                <td> <select name="idtech">
                        <?php
                        foreach ($lestechniciens as $untechnicien){
                            echo "<option value ='".$untechnicien['idtech']."'>";
                            echo $untechnicien['nom'];
                            echo"</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
            <td> </td>
        <td> <input type="reset" name="Annuler" value="Annuler">
        <input type="submit"
        <?=($lIntervention !=null) ? ' name="Modifier" value="Modifier"':'
         name="Valider" value="Valider" ' ?>
         >

        </td>
         
         <?=($lIntervention !=null) ? '<input type="hidden" name="idinter" value="'.$lIntervention['idinter'].'">' : ' '?></td>
        </table>

    </form>

</center>
