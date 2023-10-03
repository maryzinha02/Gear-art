<h2>Olá, FAQS</h2>

<button>Faqs</button>

<div id="divFaqs">
</div>

<form>
    Email <input type="text" id="email" name="email">
    Senha <input type="text" id="password" name="password">
    <button type="submit">Enviar</button>
</form>

<button id="getAddress">Endereços</button>

<div id="listAddress"></div>

<script type="module" async>

    import {request, requestDebugError}
        from "<?php echo url("/assets/_shared/functions.js"); ?>";

    document.querySelector("form").addEventListener("submit", (event) => {
        event.preventDefault();
        //console.log("Olá");

        const options = {
            headers: {
                email: document.querySelector("#email").value,
                password: document.querySelector("#password").value
            },
            method: "get"
        };

        console.log(options);

        const urlLogin = "<?= url("api/user/login"); ?>";

        fetch(urlLogin, options).then((response) => {
            response.json().then((user) => {
                if(user){
                    localStorage.setItem("userLogin", JSON.stringify(user));
                }
            });
        });

    });

    document.querySelector("#getAddress").addEventListener("click", () => {
        const url = "<?= url("api/user/address"); ?>";
        const userLogin = JSON.parse(localStorage.getItem("userLogin"));
        const options = {
            headers: {
                token: userLogin.user.token
            },
            method: "get"
            
        };
        
       fetch(url, options).then(response => {
           response.json().then(addresses => {
               console.log(addresses);
           })
       });
    });



    // http://localhost/escola-manha/api/faqs
    const url = "<?php echo url("/api/faqs"); ?>";

    const options = {
        method: "GET"
    };

    // const getFaqs = async () => {
    //     const faqs = await request(url, options);
    //     //console.log(faqs);
    // };

    // getFaqs();*/

    const button = document.querySelector("button");
    button.addEventListener("click", async () => {
        const faqs = await request(url, options);
        //console.log(faqs);
        faqs.forEach((faq) => {
            document.querySelector("#divFaqs").insertAdjacentHTML("beforeend", `<p>${faq.question} ${faq.answer}</p>`);
        });
    });

    const urlCatalogo = "<?php echo url("/api/catalogo"); ?>";
    //console.log(urlCourses);

    fetch(urlCatalogo).then((response) => {
        response.json().then((arts) => {
            console.log(arts);
            arts.forEach((art) => {
                //console.log(art.name);
            });
        });
    });

    const getFaqs = async () => {
        const response = await fetch(url);
        const faqs = await response.json();
        //console.log(faqs);
    };
    getFaqs();
</script>