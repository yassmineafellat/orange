<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <Center>
    <h1>  Bienvenue chez Orange</h1>
<br>
<br>

    <a href="index.php?page=1">
        <img src="img/home.png" height="100" width="150"></a>

        <a href="index.php?page=2">
        <img src="img/client.png" height="100" width="100"></a>

        <a href="index.php?page=3">
        <img src="img/produit.png" height="100" width="100"></a>

        <a href="index.php?page=4">
        <img src="img/technicien.png" height="100" width="100"></a>

        <a href="index.php?page=5">
        <img src="img/intervention.png" height="100" width="100"></a>



        </Center>

        <?php 
        
        
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
    
    

         switch ($page){
            case 1 : require_once ("home.php"); break;
            case 2 : require_once ("gestion_clients.php"); break;
            case 3 : require_once ("gestion_produit.php"); break;
            case 4 : require_once ("gestion_techniciens.php"); break;
            case 5 : require_once ("gestion_interventions.php"); break;
            default : require_once ("erreur.php"); break;
         }
        ?>
   
</body>
</html>