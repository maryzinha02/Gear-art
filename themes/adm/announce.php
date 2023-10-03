<?php
  $this->layout("_theme");
?>

<section data-conteudo="cadPinturasSec" id="cadPinturasSec">
    <div class="container">
        <div class="cadConteudo">

            <div data-conteudo="cadastrarProd" id="cadastrarProd">
                <form id="form-arts" class="form">
                    <input id="nomeProd" type="text" name="nome" placeholder="Nome da Obra de Arte">
                    <input id="precoProd" type="number" name="preco" placeholder="Quanto a Obra custa?">
                
                    <button id="btnCadProd">Cadastrar</button>
                                
                    <!-- <div id="cadProdOk">
                    </div> -->
                </form>
            </div>
        </div>
    </div>

    <div id="anuncieFalse" class="hidden">

    </div>

    

<script type="text/javascript" async>
    var userLogeded = JSON.parse(localStorage.getItem("userLogeded"));

    if(userLogeded.trueorNot === false){

        const abaAnuncie = document.querySelector("#cadPinturasSec");
        abaAnuncie.classList.add('hidden');

        const tentarEntrar = document.querySelector(".abas #anunciar").addEventListener('click', () => {
            alert("Cadastre-se para entrar!");
        });

    }

    const form = document.querySelector("#form-arts");
    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const nomePintura = document.querySelector("#nomeProd").value;
        const precoPintura = document.querySelector("#precoProd").value;
        const autorPintura = document.querySelector("#autorProd").value;

        const pinturaData = new FormData();
        pinturaData.append("name", nomePintura);
        pinturaData.append("id_authors", autorPintura);
        pinturaData.append("price", precoPintura);

        const data = await fetch("<?= url('api/arte');?>", {
            method: "POST",
            body: pinturaData
        });

        //console.log(data.text())
        
        const response = await data.text();
        alert("Cadastrado com sucesso");

    });
</script>

</section>

