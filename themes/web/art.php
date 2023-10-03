<?php
    $this->layout("_theme",["authors" => $authors]);
?>

<div class="selectCat">
    
<button class="btnsAutors"><a href="<?= url ("/catalogo"); ?>">Mostrar Todos</a></button>

<?php
    foreach ($authors as $author) {
?>
    <button class="btnsAutors"> <a href="<?= url ("catalogo/{$author->name}"); ?>" > <?=$author->name; ?> </a> </button>
<?php
    }
?>


</div>

<section data-conteudo="catalogo" id="catalogo">
    <div class="catalogo">

    <?php 

    //var_dump($arts);
    foreach ($art as $arts){
              
    ?>
        <div class="produtos">
            <img src="<?= url("/assets/web/img/vanBar.jpeg")?>" height="200px" >
            <h2> <?= $arts->name_art; ?> </h2>
            <h4> <?=$arts->name_author; ?> </h4>
            <h1> <?=$arts->price_art; ?> </h1>

            <button class="btnAddChart"> Adicione ao carrinho </button>
            <button class="btnFavoritar"> Favoritar </button>
        </div>
    <?php
    }
    ?>
    
                
</section>