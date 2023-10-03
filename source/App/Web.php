<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Author;
use Source\Models\User;
use Source\Models\Faq;
use Source\Models\Art;

class Web
{

    private $view;
    private $authors;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web","php");
        $authors = new Author();
        $this->authors = $authors->selectAll();
        
    }

    public function home()
    {
        echo $this->view->render("home",[
        ]);
    }

    public function register(array $data)
    {
        if(!empty($data)){
            
            $response = json_encode($data);
            echo $response;
            return;
        }

        echo $this->view->render("register",[]);
    }

    public function about()
    {
        echo $this->view->render("about",[
        ]);
    }

    public function login ()
    {
        echo $this->view->render("login",[]);
    }


    public function art (array $data) : void {

        $arts = new Art();

        if(!empty($data["author"])){
            
            echo $this->view->render("art", [
                "art" => $arts->selectByAuthor($data["author"]),
                "authors" => $this->authors
            ]);
            return;
        }


        echo $this->view->render("art", [
            "art" => $arts->selectAll(),
            "authors" => $this->authors
        ]);
    }

    public function shopCart () {

        echo $this->view->render("shopCart",[
        ]);
    }

    public function faq ()
    {
        $faqs = new Faq();
        //$faqs->selectAll();

        echo $this->view->render("faq", [
            "faqs" => $faqs->selectAll(),   
        ]);
    }

    public function favorite()
    {
        echo $this->view->render("favorite",[
        ]);
    }

    public function error (array $data) : void
    {
        var_dump($data);
    }

    public function apiFaqs()
    {
        echo $this->view->render("api-faqs",[
        ]);
    }

}



/*public function location()
    {
        $name = "Fábio Santos";
        echo $this->view->render("location",[
            "name" => "Fábio",
            "email" => "fabiosantos@ifsul.edu.br"
        ]);
    }*/