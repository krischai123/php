<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT RATE</title>
</head>
<body>
  <?php  
  require("connect_db.php");
  
  $search_text = '';
  if($_GET && isset($_GET['input_search'])){
      $search_text = $_GET['input_search'];
      $search_text1 = $_GET['input_search1'];

      //$sql_insert = 'INSERT INTO mm_rateing(rate_title) VALUES ("'. $search_text .'")';
      $sql_insert = 'INSERT INTO mm_movies_actor(movie_id,actor_id) VALUES ("'. $search_text .'","'. $search_text1 .'")';
      
      if($conn->query($sql_insert) === TRUE){
        echo 'success';
      }else{
        echo 'error'. $sql_insert . "<br>" . $conn->error; 
      }
  }
  
?>  <form action="" method="get">
       เพิ่ม Genres:
        <input type="text" name="input_search" placeholder="GENRES NAME" >
        <input type="text" name="input_search1" placeholder="GENRES NAME" >
        &emsp;
        <button type="sunmit">
          SUBMIT
        </button>
        <button><a href="moviedb1.php">BACK</a></button></th>
                
        
      </form>
</body>
</html>

<table border="1" cellspacing="0" cellpadding="5">
    <!-- cellspacing คือระยะห่างของตาราง   -->
    
    <thead>
        <tr>

            <th> # </th>
            <th> ชื่อ </th>
            <th> ชื่อกลาง </th>
            
            <!-- <th> Income </th>
          <th> Rate </th>
          <th> Director </th> -->
          

        </tr>
    </thead>
    <tbody>
        <?php
        require('connect_db.php');

        $sql = "SELECT * FROM   
                                mm_movies_actor";

        $result = $conn->query($sql);
        echo $conn->error;
        $count = 1;

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $count ?></td>
                    
                    <td> <?= $row['movie_id']; ?> </td>
                    <td> <?= $row['actor_id']; ?> </td>
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