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

      $sql_insert = 'INSERT INTO mm_rateing(rate_title) VALUES ("'. $search_text .'")';
      
      if($conn->query($sql_insert) === TRUE){
        echo 'success';
      }else{
        echo 'error'. $sql_insert . "<br>" . $conn->error; 
      }
  }
  
?>  <form action="" method="get">
       เพิ่ม RATE:
        <input type="text" name="input_search" placeholder="RATE NAME" >
        &emsp;
        <button type="sunmit">
          SUBMIT
        </button>
        <button><a href="rate_list.php">Back</a></button></th>
       
      </form>
      
</body>
</html>