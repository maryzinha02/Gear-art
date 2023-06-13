<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gear Art</title>
    <link rel="stylesheet" href="<?= url("/assets/web/styles.css");?>">
    <link rel="stylesheet" href="<?= url("/assets/web/reset.css");?>">
    
</head>
<body>
    <div id="dLoginLogour">
        <button id="loginLogout"><a href="Login.html">Entrar/Sair</a></button>
    </div>
    <div id="logo">
        <h2 class="imagem"><img src="<?= url("/assets/web/img/art.webp")?>"></h2>
        
        <h1>Gear Art</h1>
    </div>

    <div class="container">
        <div class="abas">
            <button  data-aba="homepage" data-open >Pagina inicial</button>
            <button data-aba="catalogo">Catálogo</button>
            <button data-aba="Contate">Contate-nos</button>
            <button data-aba="config">Sua conta</button>                 
           
    </div>
    <div class="conteudo">
    <?= $this->section("content");  ?>
</div>

    
    <script type="text/javascript" src="<?= url("/assets/web/scripts.js");?>" async></script>
</body>
</html>