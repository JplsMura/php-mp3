<?php

function getAlbuns() {
    $albuns = glob('albuns/*');
    return $albuns;
}
