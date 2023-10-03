<?php
  $this->layout("_theme");
?>

<section data-conteudo="configSec" id="configSec">
<div class="container">

    <div class="abas2">
        <button data-aba="entrar" id="abaEntrar" data-open>Entrar</button>
    </div>

    <div class="conteudo">
        <div data-conteudo="entrar" id="entrar">
            <form id="form-log" class="form">
                <input id="enEmail" type="text" name="email" placeholder="Seu e-mail">
                <input id="enPassword" type="password" name="password" placeholder="Sua senha">
                
                <button>Entrar</button>
        
                <div class="response">

                </div>
            </form>
        </div>    

        <div class="NcdAinda">
            <a href="<?= url ("/cadastro"); ?>"> Não se cadastrou ainda? </a>
        </div>
    </div>
    
</div>
</section>

<script type="text/javascript" async>
    const url = `<?= url("api/user/login");?>`;

    async function request (url, options) {
        try {
            const response = await fetch (url, options);
            const data = await response.json();
            return data;
        } catch (err) {
            console.error(err);
            return {
                type: "error",
                message: err.message
            };
        }
    }

    document.querySelector("#form-log").addEventListener("submit", async (e) => {
        e.preventDefault();
        //const formData = new FormData(document.querySelector("#form-log"));
        const options = {
            method: 'get',
            headers : {
                email: document.querySelector("#enEmail").value,
                password: document.querySelector("#enPassword").value
            }
        };
        const resp = await request(url, options);
        console.log(resp);
    });

</script>

