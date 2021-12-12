<?php

function getAlbuns() {
    $albuns = glob('albuns/*');
    return $albuns;
}

function getMusics($album){
    $musics = glob("albuns/{$album}/musics/*.mp3");
    return $musics;
}
