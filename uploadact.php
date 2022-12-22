<?php
if (isset($_POST['submit'])) {
 
    $filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];
    $folder = "./product_images/" . $filename;

    echo "$folder";
  }
 
?>