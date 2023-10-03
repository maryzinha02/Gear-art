<?php
  $this->layout("_theme");
?>
<section data-conteudo="configSec" id="configSec">
    <div class="container">

        <div class="abas2">
            <button data-aba="cadastrar" id="abaCadastrar">Cadastre-se</button>
        </div>

        <div  data-conteudo="cadastrar" id="cadastrar">
            <form id="form-cad" class="form">

            <input id="name" type="text" name="name" placeholder="Seu nome">
            <input id="email" type="text" name="email" placeholder="Seu e-mail">
            <input id="password" type="password" name="senha" placeholder="Sua Senha">

            <button id="cadastre">Cadastrar</button>


            </form>
        </div>
    
        <div class="NcdAinda">
            <a href="<?= url ("/login"); ?>"> já tem conta? </a>
        </div>
    

        
    </div>
</section>

<script type="text/javascript" async>
    const form = document.querySelector("#form-cad");

    // const headers = {
    //     email: "fabiosantos@ifsul.edu.br",
    //     password: "12345678"
    // };

    form.addEventListener("submit", async (e) => {
        e.preventDefault();
        //console.log(new FormData(form));
        const data = await fetch(`<?= url("api/user/cad");?>`,{
            method: "post",
            body: new FormData(form),
            headers: headers
        });
        const user = await data.json();
        console.log(user);
    });
</script>