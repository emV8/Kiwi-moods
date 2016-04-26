<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of player
 *
 * @author Olivier
 */
class Player {

    private $elmnt;

    public function __construct($path, $i, $ajax, $id, $auto, $way, $titre) {
        if (!$ajax) {
            $path2 = $path;
        } else {
            $path2 = "../";
        }
        if ($auto) {
            $str = 'autoplay';
        } else {
            $str = "";
        }
        if ($way != -1) {
            $list = $way;
            $titre = $titre;
            $count = count($titre);
            $src=$list[$i];
        } else {
            $file = $path2 . "musique/";
            $dossierLst = new DossierList($file);
            $list = $dossierLst->getArray();
            $titre = $dossierLst->getTitre();
            $count = $dossierLst->getTotal();
            $src=$path . "musique/$list[$i]";
        }

        $this->elmnt = "";
        if (isset($list)) {
            $this->elmnt .= "<div style=\"text-align:left;font-size:17px; font-weight:bold;padding:0.5%\" class=\"playTitre\">"
                    . "&nbsp;&nbsp;" . htmlspecialchars(stripcslashes($titre[$i])) . ""
                    . "<img id=\"load_$id\" style=\"display:none;width:20px;float:right;\" src=\"" . $path . "images/load.gif\"/></div>";
            $this->elmnt .= "<div  class=\"playP\"><audio ontimeupdate=\"audio(this,$i,'$path','$id'," . $count . ")\" "
                    . "id=\"playlist\" style=\"width:100%;\" src=\"$src\" controls $str></audio></div>";
        }
    }

    public function getElmnt() {
        return $this->elmnt;
    }

}
