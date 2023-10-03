<?php

namespace Source\App\Api;

use Source\Models\Art;

class Arts extends Api
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read (array $data) : void
    {
        $response = [
            "code" => 200,
            "type" => "success",
            "message" => "Dados da pintura"
        ];
        http_response_code(200);
        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function create (array $data) : void
    {

        if(!empty($data)){
            $art = new Art(null, $data["name"],$data["id_authors"],$data["price"]);

            if(!$art->insert()){

                $response = [
                    "error" => [
                        "code" => 400,
                        "type" => "invalid_data",
                        "message" => $art->getMessage()
                    ]
                ];
                $this->back($response,400);
                return;
            }

            $response = [
                "art" => [
                    "type" => "success",
                    "id" => $art->getIdArts(),
                    "name" => $art->getName(),
                    "id_authors" => $art->getId_author(),
                    "price" => $art->getPrice()
                ]
            ];

            $this->back($response,201);
        }
    }

    public function listArts (array $data): void
    {
        //idAuthor
        if(!empty($data["id_authors"])){
            $art = (new Art())->selectByCategoryId($data["id_authors"]);
            $this->back($art,200);
            return;
        }

        $art = (new Art())->selectAll();
        $this->back($art,200);
    }
}