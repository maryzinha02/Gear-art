<?php

namespace Source\App;

use League\Plates\Engine;

class Adm
{
    private $view;

    public function __construct ()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/adm","php");
    }

    public function home()
    {
        echo $this->view ->render("home");
    }

    public function curators()
    {
        echo $this->view ->render("curators");
    }

    public function announce (array $data)
    {
        if(!empty($data)){
            $response = json_encode($data);
            
            echo $response;
            return;
        }

        echo $this->view->render("announce", []);
    }

}