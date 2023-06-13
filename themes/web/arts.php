<?php
    $this->layout("_theme");
?>

<section data-conteudo="catalogo" id="catalogo">
            <div class="catalogo">

            <?php 
            foreach ($arts as $art){
              
            ?>
                <div class="produtos">
                    <img src="<?= url("/assets/web/img/vangogh.jpeg")?>" height="200px" >
                    <h2> <?= $art->name; ?> </h2>
                    <h4> <?=$art->author; ?> </h4>


                </div>
            <?php
            }
            ?>
                
                
            </div>
        </section>