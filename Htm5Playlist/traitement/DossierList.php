<?php

class DossierList {

    private $array, $titre,$i;

    public function __construct($dossier) {
        $this->array = array();
        $this->titre = array();
        $this->i=0;
        $this->ScanDirectory($dossier);
    }

    public function getArray() {
        if (isset($this->array[0])) {
            return $this->array;
        } else {
            return null;
        }
    }
public function getTotal(){
    return $this->i;
}
    public function getTitre() {
        if (isset($this->titre[0])) {
            return $this->titre;
        } else {
            return null;
        }
    }

    private function ScanDirectory($Directory) {
        $MyDirectory = opendir($Directory) or die('Erreur');
        while ($Entry = @readdir($MyDirectory)) {
            if ($Entry != '.' && $Entry != '..') {
                if (isset($Entry)) {
                    $this->array[$this->i] = $Entry;
                    $this->titre[$this->i] = preg_replace("#(\..*$)#", "", $Entry);
                    $this->i++;
                }
            }
        }
        closedir($MyDirectory);
    }

}
