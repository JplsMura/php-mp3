<h1 class="mt-5">Cadastro de nova música para o album <?=$_GET['album']?></h1>

<form action="#" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <input type="file" name="audio" id="audio" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Cadastrar</button>

</form>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $album = $_GET['album'];

        $path = "albuns/{$album}/musics/";
        
        if(!is_dir($path)){
            mkdir($path);
        }

        $audio = $_FILES['audio'];
        // var_dump($audio);

        if(move_uploaded_file($audio['tmp_name'], $path . $_FILES['audio']['name'])){
            header("Location: ?page=musics&album={$album}");
        } else {
            echo 'Falha ao fazer o upload';
        }
    }

?>
