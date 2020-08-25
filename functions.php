<?php

require "Classes/LightFFprobe.php";

function is_dolby_5($file,$path) {

    $numberOfChannels = LightFFprobe::channels("$path/$file");
   
    if ($numberOfChannels > 5) {
        return true;
    }

    return false;
}

function dolby_5_file_detector($files,$path)
{
    $wantedVideos = [];

    foreach ($files as $file) {

        if (is_dolby_5($file,$path)) {
            $wantedVideos[] = "$path/$file";
        }
    }

    return $wantedVideos;
}


