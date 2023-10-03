<?php

namespace Source\Models;

use Source\Core\Connect;

class Address
{
    private $street;
    private $number;
    private $complement;
    private $idUser;

    public function __construct($street = null, $number = null, $complement = null, $idUser = null)
    {
        $this->street = $street;
        $this->number = $number;
        $this->complement = $complement;
        $this->idUser = $idUser;
    }

     /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street): void
    {
        $this->street = $street;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number): void
    {
        $this->number = $number;
    }

    public function getComplement()
    {
        return $this->complement;
    }

    public function setComplement($complement): void
    {
        $this->complement = $complement;
    }

    public function selectByIdUser (int $idUser) : array
    {
        $sql = "SELECT * FROM addresses WHERE user_id = :idUser";
        $stmt = Connect::getInstance()->prepare($sql);
        $stmt->bindParam(":idUser",$idUser);

        try {
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            return $e->getMessage();
        }

    }

}
