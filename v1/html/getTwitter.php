<?php

$dataURL = "http://twitter.com/statuses/user_timeline/38788684.rss";

//note that this will not follow redirects
readfile($dataURL);

?>