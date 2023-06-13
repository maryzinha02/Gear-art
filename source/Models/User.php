<?php

namespace Source\Models;

use Source\Core\Connect;

class User {
    private $name;
    private $email;
    private $password;
    private $address; // Atributo novo

    public function __construct (
        $name = null,
        $email = null,
        $password = null,
        Address $address = null // Parametro novo
    ){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address; // Atribuição nova
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword(): mixed
    {
        return $this->password;
    }

    public function setPassword(mixed $password): void
    {
        $this->password = $password;
    }

    public function insert()
    {
        $query = "INSERT INTO users 
                  VALUES (NULL,'{$this->name}','{$this->email}','{$this->password}')";
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
