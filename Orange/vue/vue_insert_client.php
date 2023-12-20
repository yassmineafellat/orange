<h3> Ajout d'un nouveau client </h3>
<form method="post">
    <table>
        <tr>
            <td> Nom du client :</td>
            <td> <input type="text" name="nom" value="<?= ($leclient !=null) ? $leclient['nom'] : ''?>"></td>
        </tr>
        <tr>
            <td> Prenom du client:</td>
            <td> <input type="text" name="prenom"value="<?= ($leclient !=null) ? $leclient['prenom'] : ''?>"></td>
        </tr>
        <tr>
            <td> Adresse du client :</td>
            <td> <input type="text" name="adresse"value="<?= ($leclient !=null) ? $leclient['adresse'] : ''?>"></td>
        </tr>
        <tr>
            <td> Email du client :</td>
            <td> <input type="text" name="email"value="<?= ($leclient !=null) ? $leclient['email'] : ''?>"></td>
        </tr>
        
        <td> </td>
        <td> <input type="reset" name="Annuler" value="Annuler">
        <input type="submit"
        <?=($leclient !=null) ? ' name="Modifier" value="Modifier"':'
         name="Valider" value="Valider" ' ?>
         >
        </td>
         
         <?=($leclient !=null) ? '<input type="hidden" name="idclient" value="'.$leclient['idclient'].'">' : ' '?>
    </table>
</form>