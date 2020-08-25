<?php

require 'functions.php';
require 'Classes/CommandLineInput.php';

$path = CommandLineInput::read();

$files = scandir($path);

$wantedVideos = dolby_5_file_detector($files,$path);

var_dump($wantedVideos);