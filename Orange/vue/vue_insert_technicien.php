<h3> Ajout d'un nouveau techniciens</h3>
<form method="post">
    <table>
        <tr>
            <td> Nom du techniciens :</td>
            <td> <input type="text" name="nom" value="<?= ($letechnicien !=null) ? $letechnicien['nom'] : ''?>"></td>
        </tr>
        <tr>
            <td> Prenom :</td>
            <td> <input type="text" name="prenom"value="<?= ($letechnicien !=null) ? $letechnicien['prenom'] : ''?>"></td>
        </tr>
        <tr>
            <td> Qualification :</td>
            <td> <input type="text" name="qualification"value="<?= ($letechnicien !=null) ? $letechnicien['qualification'] : ''?>"></td>
        </tr>
        <tr>
            <td> Email:</td>
            <td> <input type="text" name="email"value="<?= ($letechnicien !=null) ? $letechnicien['email'] : ''?>"></td>
        </tr>
        
        <td> </td>
        <td> <input type="reset" name="Annuler" value="Annuler">
        <input type="submit"

        <?=($letechnicien !=null) ? ' name="Modifier" value="Modifier"':'
         name="Valider" value="Valider" ' ?>
         >
        </td>
         
         <?=($letechnicien !=null) ? '<input type="hidden" name="idtech" value="'.$letechnicien['idtech'].'">' : ' '?>
    </table>
</form>