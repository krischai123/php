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


    <?php
    require("connect_db.php");
    $rate_name = '';
    $rate_id='';
    $rate_name1 = '';

    if($_GET && isset($_GET['rid'])){
        $rate_id = $_GET['rid'];
    
        $rate_insert = 'SELECT * FROM mm_rateing WHERE rate_id ='.$rate_id;
        $rate_result = $conn->query($rate_insert);
        $rate = $rate_result->fetch_assoc();

        $rate_name1 = $rate['rate_title'];
       // $rate_id= $rate['rate_title'];

        //echo $rate['rate_id'].' '.$rate['rate_title'];
    }


    

    if ($_POST && isset($_POST['txexdata']) && isset($_POST['edit_id'])) {
        
        echo $rate_id = $_POST['edit_id']; 
        echo '<br>';
        echo $rate_name = $_POST['txexdata'];  
        echo '<br>';
        $rate_update = 'UPDATE mm_rateing SET rate_title = "'.$rate_name.'" WHERE rate_id ='.$rate_id;
        echo $rate_update;
        echo '<br>';
    
       // $rate_insert = 'INSERT INTO mm_rateing (rate_title)VALUES("'.$rate_title.'")';
                        
                        if ($conn->query($rate_update) === TRUE) {
                            echo "New record created successfully";
                          } else {
                            echo "Error: " . $rate_update . "<br>" . $conn->error;
                          }
    }
    ?>
    <form action="" method="post">
        <br>
        <h5>แก้ไข</h5>
        <input name="txexdata" type="แก้ไขข้อมูล" id="" value="<?=$rate_name1;?>">
        <input name="edit_id"  type="hidden"  value="<?=$rate_id?>">
        
        <input type="submit" value="ตกลง">
        <button value="reset">รีเซต</button>
        <button><a href="rate_list.php">Back</a></button></th>
    </form>

    <br>
 <table border="1" cellspacing="0" cellpadding="5">
    <!-- cellspacing คือระยะห่างของตาราง   -->
    
    <thead>
        <tr>

            <th> # </th>
            <th> Rate </th>
            
            <!-- <th> Income </th>
          <th> Rate </th>
          <th> Director </th> -->
          

        </tr>
    </thead>
    <tbody>
        <?php
        require('connect_db.php');

        $sql = "SELECT * FROM   
                                mm_rateing";

        $result = $conn->query($sql);
        echo $conn->error;
        $count = 1;

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $count ?></td>
                    
                    <td> <?= $row['rate_title']; ?> </td>
                   
                    
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