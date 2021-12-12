<h1 class="mt-5">
    Músicas do Álbum <?=$_GET['album']?>
</h1>

<a class="btn btn-success" href="?page=new_music&album=<?=$_GET['album']?>">
    Cadastrar Nova Música
</a>
<hr>

<?php
    $album = $_GET['album'];
    $musics = getMusics($album);

    foreach($musics as $music):
?>

    <div class="col-12">
        <audio src="<?=$music?>" controls></audio>
    </div>

<?php endforeach; ?>
