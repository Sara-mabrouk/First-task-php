<?php

// echo "<h1> Blog</h1>";
// echo "<a href='task5.php'>Create Form </a> <br> ";
// echo "<a href='text.txt'>Delete all </a><br>";
// echo "<a href='deleteSession.php'>open</a><br>";

$file = fopen('text.txt', "r") or die('unable to open file');
while (!feof($file)) {
    $l = fgets($file);
    $lineArray = explode(',',$l);
    if (!empty($l)) {
        setcookie('row', $l, time() + 86400, '/');
        echo $l . " <a href='test1.php?id=".$lineArray[0]."'> Delete Form </a><br>";
    }
}
fclose($file);
?>
