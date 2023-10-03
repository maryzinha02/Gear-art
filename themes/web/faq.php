<?php
    $this->layout("_theme");

    //criar a classe(completas), criar a tabela...
    //inserir perguntas e diversos na tabela do banco de dados(para testar)

?>

<h2>Olá, FAQS</h2>

<button>Faqs</button>

<script type="module" async>

const button = document.querySelector("button");

    const url = "<?php echo url("/api/faqs"); ?>";

    const options = {
        method: "GET"
    };

    button.addEventListener("click", async () => {
        const faqs = await request(url, options);
        //console.log(faqs);
        faqs.forEach((faq) => {
            document.querySelector("#divFaqs").insertAdjacentHTML("beforeend", `<p>${faq.question} ${faq.answer}</p>`);
        });
    });

    const getFaqs = async () => {
        const response = await fetch(url);
        const faqs = await response.json();
        //console.log(faqs);
    };
    getFaqs();
</script>