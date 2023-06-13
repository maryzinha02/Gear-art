const $ = document.querySelector.bind(document);
function tabNavigation(){

const html = {
    abas: [...$('.abas').children],
    conteudos: [...$('.conteudos').children],
    openTab: $('[data-open]')
}
console.log(html.abas)

/*function Catalogo(){

}*/

function esconderConteudos(){
 
    html.conteudos.forEach(section => {
        section.style.display = "none"; 
    })
}

function removerAsClassesAtivas(){
    html.abas.forEach(tab => {
        tab.className = tab.className.replace(" ativa" , "")
    })
}

function showConteudoTab(aba){
    const tabContent = $('#' + aba);
    tabContent.style.display = 'block';
}

function selectTab(event){
    esconderConteudos();
    removerAsClassesAtivas();

   const target = event.currentTarget;
   showConteudoTab(target.dataset.aba)

   target.className += " ativa";
}

function ouvindoAsmudancas(){
    html.abas.forEach(tab => {
        tab.addEventListener('click', selectTab)
    })
}

function init(){ 
    esconderConteudos();
    ouvindoAsmudancas();
    

    html.openTab.click()
}

return init();

}

tabNavigation();