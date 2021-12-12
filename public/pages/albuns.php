<h1>Álbum</h1>

<div class="row">

    <?php

        $albuns = getAlbuns();

        foreach ($albuns as $album):
            $infoAlbum = explode('/', $album);
            $nameAlbum = $infoAlbum[1];
            // $imgAlbum = $album . '/' . $nameAlbum . '.jpg';
            $imgAlbum = "{$album}/{$nameAlbum}.jpg";
    ?>
        <div class="col-3 album">
            <a href="">
                <img class="img-album" src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>">
                <h6><?=$nameAlbum?></h6>
            </a>
        </div>
    <?php
        endforeach;
    ?>
</div>
