<?php
function getAllFiles() {
    $files = array();
    $links = opendir('downloads/links');
    while ( $file = readdir($links) ) {
        if ( is_link($file) ) {
            $files[] = $file;
        }
    }
    clisedir($links);

    return ($files);
}
