<?php

namespace Source\Models;

use Source\Core\Connect;

Class Art {
    private $id_arts;
    private $name;
    private $id_authors;
    private $price;

    public function __construct ($id_arts =null, $name = null, $id_authors = null, $price = null){
        $this->id_arts = $id_arts;
        $this->name = $name;
        $this->id_authors = $id_authors;
        $this->price = $price;

    }

    public function getIdArts()
    {
        return $this->id_arts;
    }

    public function setIdArts($id_arts)
    {
        $this->id_arts = $id_arts;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getId_author()
    {
        return $this->id_authors;
    }

    public function setId_author($id_authors): void
    {
        $this->id_authors = $id_authors;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

   
    public function insert()
    {
        $query = "INSERT INTO arts VALUES ( NULL, :name, :id_authors, :price)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":id_authors", $this->id_authors);
        $stmt->bindParam(":price", $this->price);
    
        try {
            $stmt->execute();
            if ($stmt->rowCount()) {
                $this->id_arts = Connect::getInstance()->lastInsertId();
                $this->message = "Pintura cadastrada com sucesso!";
                return true;
            }
    
            $this->message = "Erro ao inserir, verifique os dados!";
            return false;
            
        } catch (PDOException $e) {
            $this->message = "Erro: {$e->getMessage()}";
            return false;
        }
    }
    

    public function selectAll ()
    {
        $query = "SELECT arts.name as 'name_art', authors.name as 'name_author', arts.price as 'price_art' FROM arts
                  JOIN authors ON arts.id_authors = authors.id_authors";
                  
        $stm = Connect::getInstance()->query($query);
        return $stm->fetchAll();
    }

    public function selectByAuthor (string $author)
    {
        $query = "SELECT arts.name as 'name_art', authors.name as 'name_author', arts.price as 'price_art' FROM arts
        JOIN authors ON arts.id_authors = authors.id_authors
        WHERE authors.name = '{$author}'";

        $stm = Connect::getInstance()->query($query);
        return $stm->fetchAll();
    }

    
    public function selectByCategoryId (int $authorId)
    {
        $query = "SELECT arts.name, authors.name, arts.price FROM arts 
         JOIN authors ON arts.id_authors = authors.id_authors 
         WHERE arts.id_authors = {$authorId}";

        $stm = Connect::getInstance()->query($query);
        return $stm->fetchAll();
    }

   
}