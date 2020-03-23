<?php
 $nom_cinema = $_POST['nom_cinema'];
 $ville_cinema = $_POST['ville_cinema'];
 $adresse_cinema = $_POST['adresse_cinema'];
 $mail_cinema = $_POST['mail_cinema'];
 $telephone_cinema = $_POST['telephone_cinema'];


      try
      {
        $bdd = new PDO('mysql:host=db5000303635.hosting-data.io;dbname=dbs296622;charset=utf8', 'dbu526549', 'n&3@Kk6H', $pdo_options);
      }
        catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

        $req = $bdd->prepare("INSERT INTO cinema(nom_cinema, ville_cinema, adresse_cinema, mail_cinema, telephone_cinema) VALUES (:nom_cinema, :ville_cinema, :adresse_cinema, :mail_cinema, :telephone_cinema)");
        $req->execute(array(
            'nom_cinema' => $nom_cinema,
            'ville_cinema' => $ville_cinema,
            'adresse_cinema' => $adresse_cinema,
            'mail_cinema' => $mail_cinema,
            'telephone_cinema' => $telephone_cinema
        ));
        $req-> closeCursor();
        header('Location: index.php');
      


?>