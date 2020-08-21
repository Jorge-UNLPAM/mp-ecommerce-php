<?php
    $myfile = fopen("info.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("info.txt"));
    fclose($myfile);
?>

<p>Y el request: </p>

<?php
    $myfile1 = fopen("info1.txt", "r") or die("Unable to open file!");
    echo fread($myfile1,filesize("info1.txt"));
    fclose($myfile1);
?>