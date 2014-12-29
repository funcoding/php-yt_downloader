<?php
require('youtube-dl.class.php');
try
{
	$mytube = new yt_downloader("http://www.youtube.com/watch?v=bvvss3Mf88A");

	$mytube->set_audio_format("wav");        # Change default audio output filetype.
	$mytube->set_avconvLogs_active(FALSE);   	# Disable Ffmpeg process logging.

	$mytube->download_audio();
}
catch (Exception $e) {
	die($e->getMessage());
}
