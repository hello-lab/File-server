<?php
$target_dir = "pdfs/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$hmm="https://file-server.ezio69.repl.co";
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists."."   <button onclick=window.location.href='https://file-server.ezio69.repl.co'>HOME</button>";
  $uploadOk = 0;
}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded."."   <button onclick=window.location.href='https://file-server.ezio69.repl.co'>HOME</button>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded."."   <button onclick=window.location.href='https://file-server.ezio69.repl.co'>HOME</button>";
  } 
}
?>