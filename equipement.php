<?php 
   $nom_equipement=$_POST['nom_equipement'];

   // Connection Bdd
   try {
    $bdd = new PDO('mysql:host=db5000303635.hosting-data.io;dbname=dbs296622;charset=utf8', 'dbu526549', 'n&3@Kk6H', $pdo_options);
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $req = $bdd->prepare("INSERT INTO equipement (nom_equipement, id_equipement)
    VALUES ( :nom_equipement, :id_equipement)");

   $req->execute(array(
       'nom_equipement' => $nom_equipement,
       'id_equipement' => 3
       ));

       $req-> closeCursor();
       header('Location: index.php');
?>