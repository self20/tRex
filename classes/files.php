<?php
function getAllFiles() {
    $dir = "downloads/links";
    $files = array();
    $links = opendir($dir);
    while ( $file = readdir($links) ) {
        if ( is_link($dir . "/" . $file) ) {
            $files[] = $dir .  "/" . $file;
        }
    }
    closedir($links);

    return ($files);
}
