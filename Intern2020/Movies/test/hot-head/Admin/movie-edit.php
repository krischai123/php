<!doctype html>
<html lang="en">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<a href="movie_insert.php">Go to Insert</a><br>
    <?php
    require("connect_db.php");
    // $search_text = '';
    // $search_text1 = '';
    // $search_text2 = '';
    // $search_text3 = '';
    // $search_text4 = '';

    $actor_id = '';

    $rate_name1 = '';
    $rate_name2 = '';
    $rate_name3 = '';
    $rate_name4 = '';
    $rate_name5 = '';

    if ($_GET && isset($_GET['rid'])) {
        $actor_id = $_GET['rid'];

        //$rate_insert = 'SELECT * FROM mm_rateing WHERE rate_id ='.$rate_id;
        $rate_insert = 'SELECT * FROM mm_actor WHERE actor_id =' . $actor_id;
        $rate_result = $conn->query($rate_insert);
        $rate = $rate_result->fetch_assoc();

        $rate_name1 = $rate['actor_firstname'];
        $rate_name2 = $rate['actor_midname'];
        $rate_name3 = $rate['actor_lastname'];
        $rate_name4 = $rate['actor_birthplae'];
        $rate_name5 = $rate['actor_birthdate'];
        // $rate_id= $rate['rate_title'];

        //echo $rate['rate_id'].' '.$rate['rate_title'];
    }




    if ($_POST && isset($_POST['txexdata'])) {
        $search_text = $_POST['txexdata'];
        $search_text1 = $_POST['txexdata1'];
        $search_text2 = $_POST['txexdata2'];
        $search_text3 = $_POST['txexdata3'];
        $search_text4 = $_POST['txexdata4'];


        // echo $rate_id = $_POST['edit_id']; 
        // echo '<br>';
        // echo $rate_name = $_POST['txexdata'];  
        // echo '<br>';
        $actor_update = 'UPDATE mm_actor SET    actor_firstname  ="' . $search_text . '", 
                                                actor_midname ="' . $search_text1 . '",
                                                actor_lastname ="' . $search_text2 . '",
                                                actor_birthplae="' . $search_text3 . '",
                                                actor_birthdate="' . $search_text4 . '"
                                                WHERE actor_id =' . $actor_id;
        echo $conn->error;
        //$rate_update = 'UPDATE mm_rateing SET rate_title = "'.$rate_name.'" WHERE rate_id ='.$rate_id;
        // echo $rate_update;
        echo '<br>';

        // $rate_insert = 'INSERT INTO mm_rateing (rate_title)VALUES("'.$rate_title.'")';

        if ($conn->query($actor_update) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $actor_update . "<br>" . $conn->error;
        }
    }
    ?>
    <form action="" method="post">
        <br>
        <h5>แก้ไข</h5>
        <input name="txexdata" type="แก้ไขข้อมูล" id="" value="<?= $rate_name1; ?>">
        <input name="txexdata1" type="แก้ไขข้อมูล" id="" value="<?= $rate_name2; ?>">
        <input name="txexdata2" type="แก้ไขข้อมูล" id="" value="<?= $rate_name3; ?>">
        <input name="txexdata3" type="แก้ไขข้อมูล" id="" value="<?= $rate_name4; ?>">
        <input name="txexdata4" type="date" value="<?= $rate_name5; ?>">

        <input name="edit_id" type="hidden" value="<?= $actor_id ?>">

        <input type="submit" value="ตกลง">
        <button value="reset">รีเซต</button>
        <button><a href="actor_list.php">Back</a></button></th>
    </form>
    <br>
 <table border="1" cellspacing="0" cellpadding="5">
    <!-- cellspacing คือระยะห่างของตาราง   -->
    
    <thead>
        <tr>

            <th> # </th>
            <th> ชื่อ </th>
            <th> ชื่อกลาง </th>
            <th> นามสกลุ </th>
            <th> เมืองเกิด </th>
            <th> วันเกิด </th>
            <!-- <th> Income </th>
          <th> Rate </th>
          <th> Director </th> -->
          

        </tr>
    </thead>
    <tbody>
        <?php
        require('connect_db.php');

        $sql = "SELECT * FROM   
                                mm_actor";

        $result = $conn->query($sql);
        echo $conn->error;
        $count = 1;

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $count ?></td>
                    
                    <td> <?= $row['actor_firstname']; ?> </td>
                    <td> <?= $row['actor_midname']; ?> </td>
                    <td> <?= $row['actor_lastname']; ?> </td>
                    <td> <?= $row['actor_birthplae']; ?> </td>
                    <td> <?= $row['actor_birthdate']; ?> </td>
                    
                | </td>
                </tr>
                    
        <?php
                $count++;
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




   
</body>

</html>