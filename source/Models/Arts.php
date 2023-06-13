<?php

namespace Source\Models;

use Source\Core\Connect;

Class Arts {
    private $id;
    private $name;
    private $author;

    public function __construct ($id = null, $name = null, $author = null){
        $this->id = $id;
        $this->name = $name;
        $this->author = $author;

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    public function insert()
    {
        $query = "INSERT INTO arts 
                  VALUES (NULL,'{$this->id}','{$this->name}','{$this->author}')";
        Connect::getInstance()->query($query);
        //$stmt->execute();
    }

    public function selectAll ()
    {
        $query = "SELECT * FROM arts";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }

   
}