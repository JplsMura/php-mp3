<h1 class="mt-5">Álbum</h1>

<a href="?page=new_album" class="btn btn-success">Adicionar Novo Álbum</a>
<hr>

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
            <a href="?page=musics&album=<?=$nameAlbum?>">
                <img class="img-album" src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>">
                <h6><?=$nameAlbum?></h6>
            </a>
        </div>
    <?php
        endforeach;
    ?>
</div>
