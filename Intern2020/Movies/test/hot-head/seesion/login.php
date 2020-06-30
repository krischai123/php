<!DOCTYPE html>
<?php
    session_start();
    require('connect_db1.php');
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_POST){
            $txt_username = $_POST['input_username'];
            $txt_password = $_POST['input_password'];

            $sql_str = 'SELECT * FROM image_upload WHERE User_username ="'.$txt_username.'" AND Pass = "'.$txt_password.'" ';
            $result = $conn->query($sql_str);
            // print_r($sql_str);
        
            echo $conn->error;
            
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
        
       $_SESSION['myname'] = array('id'=> $row['user_id'],
                                    'name'=> $row['frst_name'].' '.$row['Last_name'],
                                    'User'=>$row['user_username'],
                                    'type'=>$row['user_type']
                                );
                                //echo 'success' . $_SESSION['myname']['name'];
                                // echo ' <a href="index.php?id=" target="_blank"> เข้าสู่หน้าหลัก </a>';
        header('location: index.php');
    }else{
        echo '<b style="color:red;">Fail</b>';
        session_unset();
    }
}

    ?>
    <form action="" method="post">
        <input type="text" name="input_username" id="" placeholder="username">
        <input type="password" name="input_password" id="" placeholder="password">
        <button type="submit">
            เข้าสู่ระบบ
        </button>
    </form>
</body>
</html>

