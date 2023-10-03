<?php

$this->layout("_themes");


?>

<section data-conteudo="suaConta" id="suaConta">
<main>
    <div class="container">
        <div id="contaBah">
            Sua Conta
        </div>
       
        <div class="conteudoCc"> 
            <img id="imgPerfil" src="<?= url("/assets/web/img/imgPerfil.png")?>" height="300px">
            
            <div id="seuNome">

            </div>

            <div id="seuEmail" >

            </div>

            <button id="logout"> Sair </button>
            <button id="voltar"> <a href="<?= url ("/login"); ?>"> Voltar</a></button>

        </div>
    </div>
    
</main>
</section>

<script>
    var seuEmail = document.querySelector("#seuEmail")
    

    var userLogeded = JSON.parse(localStorage.getItem("userLogeded"))
    console.log(localStorage.getItem("userLogeded"))
    console.log(userLogeded)
    if(userLogeded.trueorNot===true){
        console.log("hello")
        seuEmail.innerHTML = `Email: ${userLogeded.email}`;
        seuEmail.classList.add('seuEmail');

    }else{
        seuEmail.innerHTML = `Email:`;
    }

    document.querySelector("#logout").addEventListener("click" , ()=>{
        
        alert("saiu com sucesso")
        userLogeded.trueorNot = false;
        userLogeded.email = ""
        localStorage.setItem("userLogeded",JSON.stringify(userLogeded));
        
        seuEmail.innerHTML = `Email:`;
    })
</script>
