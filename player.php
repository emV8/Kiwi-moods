<!DOCTYPE html>

<?php

$connexion = mysqli_connect("localhost", "root", "", "kiwimoods");
$connexion -> query("SET NAMES 'utf8'");

include 'Htm5Playlist/PlayList.php';
?>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css.css" />
  <script type="text/javascript" language="Javascript" src="Htm5Playlist/traitement/fonction.js"></script>
</head>

<body>
        
        <style>
            .player_cls{
                margin: auto;
                border-radius: 15px;
                background: rgb(90%,90%,90%);
                border: outset 2px gray;
                box-shadow: 3px 3px 10px black;
                width: 25%!important;
                position: absolute;
                top: 10%;
                left: 25%;
                right:25%
            }
        </style>

      <?php
        /* On déclare l'objet Playlist($path) avec comme paramètre le chemin
         * vers la racine du dossier Htm5Playlist/, prenez garde à renseigner le chemin 
          exacte */
          
        function genplaylist($connexion)
        {
            $playList = new PlayList("Htm5Playlist/");


            $title = array();
            $artist = array();
            $link = array();
            $requete = "SELECT titre, artiste, lien FROM music WHERE playlist_id = '".$_SESSION['playlist_id']."'";
            $res = $connexion -> query($requete);   
            while($row = mysqli_fetch_array($res)){
                $title[] = $row['titre'];
                $artist[] = $row['artiste'];
                $link[] = $row['lien'];

            }
            //*******************************
            // version 2: par des Array!
            //*******************************
            //on renseigne deux Arrays, un pour les chemins vers les musiques à lire, 
            //un deuxième pour les titres.


            $chemin[0] = $link[0];
            $titre[0] = $title[0]." - ".$artist[0];

            $chemin[1] = $link[1];
            $titre[1] = $title[1]." - ".$artist[1];

            $chemin[2] = $link[2];
            $titre[2] = $title[2]." - ".$artist[2];

            $chemin[3] = $link[3];
            $titre[3] = $title[3]." - ".$artist[3];

            $chemin[4] = $link[4];
            $titre[4] = $title[4]." - ".$artist[4];

            $chemin[5] = $link[5];
            $titre[5] = $title[5]." - ".$artist[5];

            //on place simplement la playliste généré par les Arrays grâce à 
            //la fonction getArray($id, $chemin, $titre).
            // Les paramètres de cette fonction sont dans l'ordre:
            //---- l'id de votre playlist
            //---- l'Array contenant les chemins
            //---- l'Array contenant les titres
            echo $playList->getArray("depuisArray", $chemin, $titre);
        }       
        ?>
</body>
</html>