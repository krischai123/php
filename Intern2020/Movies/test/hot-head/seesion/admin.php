<!DOCTYPE html>
<?php
    session_start();
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_SESSION['myname']['id'])){
        echo 'คุณไม่ได้ ล็อคอิน';
        exit;
    }
    if($_SESSION['myname']['type'] != 0) {
        echo 'คุณไม่มีสิทเข้าในส่วนนี้';
        exit;        
    }
    ?>
    <h3>
        สวัสดีคุณ <?=$_SESSION['myname']['name']?>
    </h3>
    <a href="logout.php">LOGOUT</a>
</body>
</html>



