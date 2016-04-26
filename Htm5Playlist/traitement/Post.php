<?php
/*«Copyright 2012 Dariumis»
 * This file is part of PhpHtmlM@il.
 *
 * PhpHtmlM@il is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PhpHtmlM@il is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with PhpHtmlM@il.  If not, see <http://www.gnu.org/licenses/>.
*/
class Post {

    private $arr_titre = Array();
    private $arr_value = Array();

    public function __construct() {
        if (isset($_POST)) {
            $this->arr_titre = array_keys($_POST);
            $this->arr_value = array_values($_POST);
        }
    }

    public function getTitre() {
        return $this->arr_titre;
    }

    public function getValue() {
        return $this->arr_value;
    }

}