<?php

        $numero_salle=$_POST['numero_salle'];

         $capacite_salle=$_POST['capacite_salle'];


         // Connection Bdd
         try {
             $bdd = new PDO('mysql:host=db5000303635.hosting-data.io;dbname=dbs296622;charset=utf8', 'dbu526549', 'n&3@Kk6H', $pdo_options);
             }
             catch(Exception $e)
             {
                 die('Erreur : '.$e->getMessage());
             }


         $req = $bdd->prepare("INSERT INTO salle (numero_salle, capacite_salle, id_cinema)
          VALUES ( :numero_salle, :capacite_salle, :id_cinema)");

         $req->execute(array(
             'numero_salle' => $numero_salle,
             'id_cinema' => 4,
             'capacite_salle'=>$capacite_salle));

             $req-> closeCursor();
             header('Location: index.php');
?>