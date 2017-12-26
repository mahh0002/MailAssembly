<?php
$old_content = file_get_contents('log.txt');
$ip = $_SERVER["REMOTE_ADDR"];

file_put_contents('log.txt', $ip . "\n" . $old_content);

header("Location: http://mailassembly.cc");
die();
?>
