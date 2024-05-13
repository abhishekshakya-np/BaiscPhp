<?php
  //if(isset($_POST['submit'])) {
    // echo "<pre>";
    // print_r($_FILES);
    if(isset($_POST['submit'])){
    $file=rand(111111111,999999999);

    move_uploaded_file($_FILES 
    ['fileToUpload']['tmp_name'],
    "upload/".$file.$_FILES['fileToUpload']
    ['name']);


  }


  

?>

<form method="post" enctype="multipart/form-data">

    <input type="file" name="fileToUpload">

    <input type="submit" name="submit">

</form>