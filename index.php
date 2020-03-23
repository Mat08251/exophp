<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="post" action="bdd_post.php">
           <input type="text" name="nom_cinema" id="nom_cinema" /><label for="nom_cinema">nom du cinema</label></br>
           <input type="text" name="ville_cinema" id="ville_cinema" /><label for="ville_cinema">nom de la ville</label></br>
           <input type="text" name="adresse_cinema" id="adress_cinema" /><label for="adresse_cinema">adresse du cinema</label></br>
           <input type="email" name="mail_cinema" id="mail_cinema" /><label for="mail_cinema">Mail du cinema</label></br>
           <input type="text" name="telephone_cinema" id="telephone_cinema" /><label for="telephone_cinema">telephone du cinema</label></br>
           <input type="submit" value="envoyer">
        </form>



        <?php
        try
        {
           $bdd = new PDO('mysql:host=db5000303635.hosting-data.io;dbname=dbs296622;charset=utf8', 'dbu526549', 'n&3@Kk6H');
        }
        catch (Exception $e)
        {
            dir('Erreur : ' . $e->getMessage());
        }


        $reponse = $bdd->query('SELECT * From cinema');

        while ($donnees = $reponse->fetch())
        {
        ?>
           <p>
           <strong>Id : </strong><?php echo $donnees['id_cinema']; ?><br />
           <strong>Ciné : </strong><?php echo $donnees['nom_cinema']; ?><br />
           <strong>Adresse : </strong><?php echo $donnees['adresse_cinema']; ?>, <?php echo $donnees['ville_cinema']; ?><br />
           <strong>Mail : </strong><?php echo $donnees['mail_cinema']; ?><br><strong>Téléphone : </strong><?php echo $donnees['telephone_cinema']; ?><br />
           </p>
        <?php
        }

        $reponse->closeCursor();
        ?>

        <form method="post" action="traitement-salle.php">
        <input type="text" name="numero_salle" id="numero_salle" /><label for="numero_salle">numero de la salle</label></br>
        <input type="text" name="capacite_salle" id="capacite_salle" /><label for="capacite_salle">capacite de la salle</label></br>
        <input type="submit" value="envoyer">
        </form>


        <?php
        try
        {
           $bdd = new PDO('mysql:host=db5000303635.hosting-data.io;dbname=dbs296622;charset=utf8', 'dbu526549', 'n&3@Kk6H');
        }
        catch (Exception $e)
        {
            dir('Erreur : ' . $e->getMessage());
        }

        $reponse = $bdd->query('SELECT * From salle');
        

        while ($donnees = $reponse->fetch())
        {
        ?>
           <p>
           <strong>Id : </strong><?php echo $donnees['id_salle']; ?><br />
           <strong>Numéro : </strong><?php echo $donnees['numero_salle']; ?><br />
           <strong>Capacité : </strong><?php echo $donnees['capacite_salle']; ?><br />
           <strong>Id-ciné : </strong><?php echo $donnees['id_cinema']; ?><br />
           </p>
        <?php
        }

        $reponse->closeCursor();
        ?>
    </body>
</html>