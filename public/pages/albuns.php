<h1>Álbum</h1>

<div class="row">

    <?php
        for($i = 1; $i <= 10; $i++):
    ?>
        <div class="col-3 album">
            <a href="">
                <img class="img-album" src="albuns/sabotagem.jpg" alt="<?=$i?>">
                <h6>Álbum <?=$i?></h6>
            </a>
        </div>
    <?php
        endfor;
    ?>
</div>
