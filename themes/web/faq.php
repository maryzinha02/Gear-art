<?php
    $this->layout("_theme");

    //criar a classe(completas), criar a tabela...
    //inserir perguntas e diversos na tabela do banco de dados(para testar)

?>

<?php

if(!empty($faqs)){
        foreach ($faqs as $faq){
            var_dump($faq);

              //echo "<div><span>{$faq}<span/><div/>"
        }

}

