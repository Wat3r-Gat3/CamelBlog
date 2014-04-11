<?php
$title = $_GET['title'];
$date = $_GET['date'];
$meta = "<P><div><pre>";
$metae = "</div></pre></P>";
$img = $_GET['img'];
$comment = $_GET['comment'];

$file_handle = fopen("testFile.html", "a");
$file_contents = $meta . "Title:" . $title . "     " . "Date:" . $date . " <P><img src=\"" . $img . "\"><P>" . "<P> comment:" . $comment . $metae;

fwrite($file_handle, $file_contents);
fclose($file_handle);
print "Done! :) <a href=\"/finally/index.html\">click here to go back to home</a><P>\"<a href=\"/finally/testFile.html\">click here to view content list</a>";
?>