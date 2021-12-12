<h1 class="mt-5">Cadastro de Novo Álbum</h1>

<form action="#" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <input type="text" name="name" id="name" placeholder="Name: " class="form-control">
    </div>

    <div class="mb-3">
        <input type="file" name="imagem" id="imagem" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Cadastrar</button>

</form>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $album = $_POST['name'];
        $path = "albuns/{$album}";

        if(!is_dir($path)){
            mkdir($path);
        }
        
        $file = $_FILES['imagem'];
        $fileInfo = explode('.', $file['name']);

        $extesion = $fileInfo[1];
        $nameImage = $album . '.' . $extesion;

        if(move_uploaded_file($file['tmp_name'], $path .'/'. $nameImage)){
            header('Location: ?page=albuns');
        }else
            echo 'Falha no upload...';
    }   

?>
