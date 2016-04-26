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
	$connexion -> query("SET NAMES 'utf8'");
	*/
	$connexion=mysqli_connect("localhost", "root", '', "kiwimoods") or die("Erreur de connexion à la bdd");
	$connexion -> query("SET NAMES 'utf8'");


	if (!empty($_POST['loginConn']) and !empty($_POST['passwordConn'])){
		connection($connexion);
	} elseif (!empty($_POST['logInscription']) and !empty($_POST['passwordInscription'])) {
		inscription($connexion);
	}

	function connection($connexion){
		global $dbprefix;
		$identifiant = $_POST['loginConn'];
		$mdp = $_POST['passwordConn'];
		$mdpcode = md5($mdp);
		$requete = "SELECT * FROM  user WHERE login = '".$identifiant."' AND mdp = '".$mdpcode."'";
		$res = $connexion -> query($requete);
		
		$row = mysqli_fetch_row($res);
		if ($row[0]){
			echo "Vous êtes connecté, '".$identifiant."'";
			$requete3 = "SELECT user_id FROM  user WHERE login = '".$identifiant."'";
			$res = $connexion -> query($requete3);
			$userid = mysqli_fetch_row($res)[0];
			session_start();
			$_SESSION['login'] = $identifiant;
			$_SESSION['userid'] = $userid;
			header('Location: mood.php');    

		}else{
			require("index.html");
			echo "<script> alert('La connexion a échoué, merci de vous inscrire.') </script>";
			echo "<script> location.href = history.back(-1) </script>";
		}
	}


	function inscription($connexion){
		global $dbprefix;
		$identifiant = $_POST['logInscription'];
		$mdp = $_POST['passwordInscription'];
		if (!empty($_POST['mail'])){
			$mail = $_POST['mail'];
		}else{
			$mail = "";
		}
		$requete = "SELECT * FROM  user WHERE login = '".$identifiant."'";
		$res = $connexion->query($requete);
		$row = mysqli_fetch_row($res);
		if (!$row[0]){
			$mdpcode = md5($mdp);
			$requete2 = "INSERT INTO  user (login, mdp, mail) VALUES('".$identifiant."','" .$mdpcode."', '" .$mail."')";
			$res2 = $connexion -> query($requete2);
			if ($res2){
				$requete3 = "SELECT user_id FROM  user WHERE login = '".$identifiant."'";
				$res = $connexion -> query($requete3);
				$tmp = mysqli_fetch_row($res);
			    $userid = $tmp[0];
				session_start();
				$_SESSION['login'] = $identifiant;
				$_SESSION['userid'] = $userid;
				$_SESSION['tuto1'] = false;
				$_SESSION['tuto2'] = false;
				header('Location: mood.php');    
			}else{
				require("index.html");
				echo "<script> alert('Une erreur est survenue, merci de recommencer.') </script>";
				echo "<script> location.href = history.back(-1) </script>";
			}
		}else{
			require("index.html");
			echo "<script> alert('Ce login est déjà utilisé') </script>";
			echo "<script> location.href = history.back(-1) </script>";
		}
	}

	?>