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
class List_play {

    private $elmnt;

    public function __construct($id, $path, $way, $titre) {
        if ($way != -1) {
            $list = $titre;
        } else {
            $file = $path . "musique/";
            $dossierLst = new DossierList($file);
            $list = $dossierLst->getTitre();
        }

        $this->elmnt = "";
        if (isset($list)) {
            $i = 0;
            foreach ($list as $v) {
                $this->elmnt .= $this->UnSon($v, $id, $path, $i);
                $i++;
            }
        } else {
            $this->elmnt .= "Pas d'éléments";
        }
    }

    private function UnSon($v, $id, $path, $i) {
        $str = "<button onclick=\"setSon('$i','$id','$path')\" "
                . "style=\"margin-bottom:5px;color:black;background:transparent;cursor:pointer;width:100%;overflow:hidden;text-align:left;display:block;padding:0.2%;border:none;font-style:italic; font-size:14px;\"class=\"unSon\">&nbsp;&nbsp;" . ($i + 1) . "- " . htmlspecialchars(stripcslashes($v)) . "</button>";
        return $str;
    }

    public function getElmnt() {
        return $this->elmnt;
    }

}
