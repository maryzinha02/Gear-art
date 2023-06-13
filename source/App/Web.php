<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;
use Source\Models\Faq;
use Source\Models\Arts;

class Web
{

    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web","php");
    }



    public function home()
    {
        echo $this->view->render("home",[]);
    }

    public function register()
    {
        //$user = new User("Fernando","fernando@gmail.com","987654");
        //var_dump($user);
        //$user->insert();
        //$users = $user->selectAll();
        //var_dump($users);

        // "users" => $user->selectAll()

        echo $this->view->render("register",[]);
    }

    public function about()
    {
        echo $this->view->render("about",[]);
    }


    public function arts () {

        //echo $this->view->render("arts",[]);

        $arts = new Arts();

        //var_dump($arts->selectAll());

        echo $this->view->render("arts", [
            "arts" => $arts->selectAll()
        ]);
        
    }

    public function contact () {

        echo $this->view->render("contact",[]);
    }

    public function faq ()
    {
        $faqs = new Faq();
        //$faqs->selectAll();

        echo $this->view->render("faq", [
            "faqs" => $faqs->selectAll()
        ]);
    }

    public function account()
    {
        echo $this->view->render("account",[]);
    }

    public function artists()
    {
        echo $this->view->render("artists",[]);
    }


    public function error (array $data) : void
    {
        var_dump($data);
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