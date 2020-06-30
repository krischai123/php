
<!DOCTYPE html>
<?php 

    session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Index</title>
</head>
<body>
<?php
    require('connect_db1.php');
    ?>
    <?php
    $user_id = '';
    //    echo $_SESSION["name"][0].'<br>';
    if(!isset($_SESSION["myname"]["id"])){
        echo 'คุณไม่ได้ ล็อคอิน';
        exit;
    }
    ?>
    <?php
    $user_id = $_SESSION["myname"]["id"];

            $sql='SELECT * FROM image_upload WHERE user_id = '. $user_id ;

            //echo $sql;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

        ?>

        <img src="<?= 'uploads/'. $row['user_img'] ?>" style="width:150px; height:150px;">
<?php
            }

    echo '<br> สวัสดีคุณ :'. ' ' .$_SESSION["myname"]["name"];

        echo ' ' . ' <a href="up1.php?"> เปลี่ยนรูปโปรไฟล์ </a>';

    if( $_SESSION["myname"]["type"] == 0 ){
    // echo '<br>' . 'คุณเป็น admin ' . ' <a href="admin.php?id =" target="_blank"> กรุณาเข้าที่หน้านี้ </a>';  
    }
    echo '<br>' . ' <a href="logout.php?"> Logout </a>';

?>
</html>






















<!-- <!DOCTYPE html>
<
    // session_start();
    // require('connect_db1.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Index</title>
</head>
<body>
<
// $user_id = '';
//    echo $_SESSION["name"][0].'<br>';
    // if(!isset($_SESSION["myname"]["id"])){
    //     echo 'คุณไม่ได้ ล็อคอิน';
    //     exit;
    // }
    

    // echo 'สวัสดีคุณ :'. ' ' .$_SESSION["myname"]["name"];
    // ?>
    <br><a href="up1.php">Up</a>
</body>
</html> -->
