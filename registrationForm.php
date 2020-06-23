<?php
$pic=$_FILES["inputFile"];
$tmpName=$pic["tmp_name"];
$Name=$pic["name"];
move_uploaded_file($tmpName,"images/$Name");
echo "<img src='images/$Name'/>";

?>