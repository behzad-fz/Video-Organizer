<?php

class LightFFprobe
{

    public static function channels($file)
    {
        if (! is_file($file)) {
            return false;
        }
        return exec("ffprobe -i $file -show_entries stream=channels -select_streams a:0 -of compact=p=0:nk=1 -v 0");
    }

    public static function resolution($file)
    {
        if (! is_file($file)) {
            return false;
        }
        return exec("ffprobe -v error -select_streams v:0 -show_entries stream=height,width -of csv=s=x:p=0 $file");
    }

    public static function duration($file)
    {
        if (! is_file($file)) {
            return false;
        }
        return exec("ffprobe -v error -show_entries format=duration -of default=noprint_wrappers=1:nokey=1 $file");
    }
}