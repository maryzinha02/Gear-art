<?php

namespace Source\Models;

use Source\Core\Connect;

Class Author {
   private $id_authors;
   private $name;

    public function selectAll()
    {
        $stm = Connect::getInstance()->query("SELECT * FROM authors");
        return $stm->fetchAll();
    }


}