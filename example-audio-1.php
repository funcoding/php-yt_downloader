<?php
require('youtube-dl.class.php');
try {
    new yt_downloader("http://www.youtube.com/watch?v=bvvss3Mf88A", TRUE, "audio");
}
catch (Exception $e) {
    die($e->getMessage());
}
