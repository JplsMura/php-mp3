<ul class="nav nav-pills flex-column flex-sm-row">

  <li class="nav-item">
    <a class="flex-sm-fill text-sm-center nav-link" href="page?albuns">Home</a>
  </li>

  <?php
    $albuns = getAlbuns();

    foreach ($albuns as $album):
      $infoAlbum = explode('/', $album);
      $nameAlbum = $infoAlbum[1];
  ?>

    <li class="nav-item">
      <a class="flex-sm-fill text-sm-center nav-link" 
        href='?page=musics&album=<?=$nameAlbum?>'>
        <?=$nameAlbum;?>
      </a>
    </li>

    <?php endforeach; ?>

</ul>