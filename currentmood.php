<?php

/*
include_once('../../config-tut8.php');
$connexion = mysqli_connect($databaselocation, $databaseuser, $databasepass);
if (!$connexion) {
	die('Could not connect: ' . mysqli_error());
}
$bdd = mysqli_select_db($databasename, $connexion);
if (!$bdd) {
	die ('Impossible de sélectionner la base de données : ' . mysqli_error());
}
$connexion -> query($requete)("SET NAMES 'utf8'");
*/
$connexion = mysqli_connect("localhost", "root", "", "kiwimoods");
$connexion -> query("SET NAMES 'utf8'");

session_start();
$userid = $_SESSION['userid'];

 $listened_playlist = array();
 /* remettre cette ligne */
$requete = "SELECT playlist_id FROM listened WHERE user_id = '".$userid."'";
//$requete = "SELECT playlist_id FROM listened WHERE user_id = 11";
$res = $connexion -> query($requete);	

while($row = mysqli_fetch_array($res)){
	$listened_playlist[] = $row['playlist_id'];
}

if(!empty($_POST['mood'])){
	global $dbprefix;
	$mood = $_POST['mood'];
	if ($mood=="autre"){
		if (empty($_POST['otherMood']) && $_POST['otherMood']==""){
			require("mood.php");
			echo "<script> alert('Merci de remplir le champ \'Autre\'') </script>";
			echo "<script> location.href = history.back(-1) </script>";
		}else{
			$mood.= " : ";
			$othermood = $_POST['otherMood'];
			$mood.= $othermood;
			$requete = 'INSERT INTO currentmood (mood_name, user_id) VALUES("'.$mood.'","' .$userid.'")';
			$res = $connexion -> query($requete);

			if (count($listened_playlist)<6){
				$all_playlist = range(1,6);
				shuffle($all_playlist);
				foreach ($all_playlist as $id) {
					if (!in_array($id, $listened_playlist)){
						$_SESSION['playlist_id'] = $id;
						break;
					}
				}
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

            $title_list = array(
                0 => array('url' => $link[0], 'title' => $title[0], 'artist' => $artist[0]),
                1 => array('url' => $link[1], 'title' => $title[1], 'artist' => $artist[1]),
                2 => array('url' => $link[2], 'title' => $title[2], 'artist' => $artist[2]),
                3 => array('url' => $link[3], 'title' => $title[3], 'artist' => $artist[3]),
                4 => array('url' => $link[4], 'title' => $title[4], 'artist' => $artist[4]),
                5 => array('url' => $link[5], 'title' => $title[5], 'artist' => $artist[5]),
            );
            shuffle($title_list);
             $_SESSION['title_list'] = $title_list;
			}else{
				header("Location:end.php");
				exit;
			}

		$requete = 'INSERT INTO currentmood (mood_name, user_id, playlist_id) VALUES("'.$mood.'","' .$userid.'","'.$id.'")';
		$res = $connexion -> query($requete);

		if (count($listened_playlist)>=6){
			header("Location:end.php");
				exit;
		}

			if($_SESSION['tuto1']){	
				header("Location: tuto2.php");
				exit;
			}else{
				header("Location: tuto1.php");
				exit;
			}
			
		}
	}else{
		
		if (count($listened_playlist)<6){
				$all_playlist = range(1,6);
				shuffle($all_playlist);
				foreach ($all_playlist as $id) {
					if (!in_array($id, $listened_playlist)){
						$_SESSION['playlist_id'] = $id;
						break;
					}
				}
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

            $title_list = array(
                0 => array('url' => $link[0], 'title' => $title[0], 'artist' => $artist[0]),
                1 => array('url' => $link[1], 'title' => $title[1], 'artist' => $artist[1]),
                2 => array('url' => $link[2], 'title' => $title[2], 'artist' => $artist[2]),
                3 => array('url' => $link[3], 'title' => $title[3], 'artist' => $artist[3]),
                4 => array('url' => $link[4], 'title' => $title[4], 'artist' => $artist[4]),
                5 => array('url' => $link[5], 'title' => $title[5], 'artist' => $artist[5]),
            );
            shuffle($title_list);
             $_SESSION['title_list'] = $title_list;
			}else{
				header("Location:end.php");
				exit;
			}

		$requete = 'INSERT INTO currentmood (mood_name, user_id, playlist_id) VALUES("'.$mood.'","' .$userid.'","'.$id.'")';
		$res = $connexion -> query($requete);

		if (count($listened_playlist)>=6){
			header("Location:end.php");
				exit;
		}
			
		if($_SESSION['tuto1']){	
				header("Location: tuto2.php");
				exit;
		}else{
				header("Location: tuto1.php");
				exit;
		}
		
	}
}else{
	require("mood.php");
	echo "<script> alert('Merci de sélectionner une humeur') </script>";
	echo "<script> location.href = history.back(-1) </script>";
}
?>