<?php
session_start();
   require_once("controleur/controleur.class.php");
   //instanciation de la classe contoleur
   $unControleur = new Controleur();
?>
 
 
 
<!DOCTYPE html>
 
<html lang="en">
 
<head>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
 
    <title>Orange</title>
 
</head>
 
<body>
 
<center>
<?php
 
    if(!isset($_SESSION["email"])){
        require_once('vue/vue_connexion.php');
    }
 
    if(isset($_POST['Connexion'])){
        $email=$_POST["email"];
        $mdp=$_POST["mdp"];
        $unUser=$unControleur->verifConnexion($email,$mdp);
        if($unUser !=null){
            $_SESSION['email']=$unUser['email'];
            $_SESSION['nom']=$unUser['nom'];
            $_SESSION['prenom']=$unUser['prenom'];
            $_SESSION['role']=$unUser['role'];
            header("location:index.php?page=1");
        }
   
 
        else{
            echo"<br> Veuillez verifiez vos identifiants.";
        }
    }
   
    if(isset($_SESSION['email'])){
        echo '
   
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
        
                <a href="index.php?page=6">
                <img src="img/deconnexion.png" height="100" width="100">
                </a> 
        
                        ';
        
    }
       if (isset ($_GET['page'])){
              $page = $_GET['page'] ;
       }else {
           $page = 1;
       }
 
       //
       switch ($page) {
           case 1 : require_once ("home.php"); break;
           case 2 : require_once ("gestion_clients.php"); break;
           case 3 : require_once ("gestion_produit.php"); break;
           case 4 : require_once ("gestion_techniciens.php"); break;
           case 5 : require_once ("gestion_interventions.php"); break;
           case  6 : session_destroy();
                  unset ($_SESSION["email"]);
                  header("location: index.php");
                  break;
           default : require_once("erreur.php"); break;
       }
 
?>
 
 
</center>  
 
</body>
 
</html>