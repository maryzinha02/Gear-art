<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gear Art</title>
    <link rel="stylesheet" href="<?= url("/assets/web/homeAdm.css");?>">
    <link rel="stylesheet" href="<?= url("/assets/web/reset.css");?>">
    
</head>
<body>

    <div id="logo">
        <img src="<?= url("/assets/web/img/logoADM.png")?>">
    </div>


    <div class="container">
        <div class="abas">
            <button data-aba="catalogo"><a href="<?= url ("/catalogo"); ?>">Catalogo</a></button>  
        
        </div>
    </div>

    <div class="conteudo">
        <?= $this->section("content"); 
        ?>
    </div>
    
</body>
