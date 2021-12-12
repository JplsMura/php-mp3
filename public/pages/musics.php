<h1 class="mt-5">
    Músicas do Álbum <?=$_GET['album']?>
</h1>
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
