<!--<br>
<h2> Orange</h2>
<br>
<h3>Bienvenue : <?= $_SESSION['nom']." ".$_SESSION['prenom']?> </h3>
<h3> Vous êtes connecter en tant que : <?=$_SESSION['role']?></h3>
<br>
<br>
<br>
<img src="img/orange.png" height="700" width="1500">
<br>
<br>-->

<br>
<h2> Orange</h2>
<br>
<h3>Bienvenue :
<?php
    if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
        echo $_SESSION['nom'] . " " . $_SESSION['prenom'];
    } else {
        echo "Nom et prénom non définis";
    }
    ?>
</h3>
<h3> Vous êtes connecté en tant que :
    <?php
    if (isset($_SESSION['role'])) {
        echo $_SESSION['role'];
    } else {
        echo "Rôle non défini";
    }
    ?>
</h3>
<br>
<br>
<br>
<img src="img/orange.png" height="700" width="1500">
<br>
<br>