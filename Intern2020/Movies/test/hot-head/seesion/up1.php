<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    session_start();
    require("connect_db1.php"); 
    $id = '';
     echo $_SESSION["myname"]["name"];
     echo '<hr>';

    if(!isset($_SESSION["myname"]["id"])){
      echo 'คุณไม่ได้ ล็อคอิน';
      exit;
    }
 
    
    $id = $_SESSION["myname"]["id"];

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
		
        
    $target_dir = "uploads/";
    $target_filee = $target_dir . basename($_FILES["img_upload"]["name"]);
    $target_file = $target_dir .$target_filee;
	// echo $target_file;
	


    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      } 
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["img_upload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
      if ($_FILES["img_upload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
      
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }
      
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        echo '<hr>';
        // echo $randomString;
        $new_name =  date('YmdGis').$randomString . '.'.$imageFileType;
        $new_target_file = $target_dir . $new_name;
        // echo '<br>';
        // echo $target_file;
        // echo '<br>';
        // echo '<br>';
        // echo $new_target_file;
        

        if (move_uploaded_file($_FILES["img_upload"]["tmp_name"], $new_target_file)) {

          $image_UPDATE = 'UPDATE image_upload SET 	user_img = "'.$new_name.'" WHERE user_id ='.$id;
          
          if ($conn->query($image_UPDATE) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $image_UPDATE . "<br>" . $conn->error;
          }
          
          echo "The file ". basename( $_FILES["img_upload"]["name"]). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
    }
     


    // echo $_FILES["img_upload"]["name"];
    // echo $_SERVER["REQUEST_METHOD"];
    // $target_file = $target_dir . basename($_FILES["img_upload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   
}
?>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="img_upload" id="">
        <button type="submit">
            ส่งไฟล์
        </button>

    </form>
</body>
</html>