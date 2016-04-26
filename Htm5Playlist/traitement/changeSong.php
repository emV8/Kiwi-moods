<?php

session_start();
header("Content-Type: text/xml");
include 'Post.php';
include 'DossierList.php';
include '../vu/Player.php';

$post = new Post();
$array = $post->getValue();
$chemin = $_SESSION[$array[2] . '_chemin'];
$titre = $_SESSION[$array[2] . '_titre'];
$player = new Player($array[1], $array[0], true, $array[2], true, $chemin, $titre);

echo $player->getElmnt();
?>

