<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gear Art</title>
    <link rel="stylesheet" href="<?= url("/assets/web/home.css");?>">
    <link rel="stylesheet" href="<?= url("/assets/web/reset.css");?>">
    
</head>
<body>

    <div id="logo">
        <img src="<?= url("/assets/web/img/logo.png")?>">
    </div>
    <div id="fotoPerfil">
        <img src="<?= url("/assets/web/img/fotoPerfilLL.png")?>">
    </div>

     <box id="shopCart">
        <a href="<?= url ("/carrinho"); ?>"><img src="<?= url("/assets/web/img/CCompra.png")?>"></a>
    </box>
    <box id="heart">
        <a href="<?= url ("/favoritos"); ?>"><img src="<?= url("/assets/web/img/coracao2.png")?>"></a>
    </box>
    <div id="mercha" >
        <a href="<?= url ("/cadastro"); ?>"> <div class="mercha"> Cadastre-se </div> </a>
    </div>

    <div class="container">
        <div class="abas">
            <button  data-aba="homepage" data-open > <a href= "<?= url ("/"); ?>">Pagina Inicial </a></button>
            <button data-aba="sobre"><a href="<?= url ("/sobre"); ?>">Sobre</a></button>
            <button data-aba="catalogo"><a href="<?= url ("/catalogo"); ?>">Catalogo</a></button>  
            <button data-aba="perguntas"> <a href="<?= url ("/faq"); ?>">Forum</a> </button>
            
        </div>
    </div>

    <div class="conteudo">
        <?= $this->section("content"); 
        ?>
    </div>
    
</body>
</html>