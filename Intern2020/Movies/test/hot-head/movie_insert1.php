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
  $search_text1 = '';
  
  if($_GET && isset($_GET['input_search'])){
      $search_text = $_GET['input_search'];
      $search_text1 = $_GET['input_search1'];
     

      //$sql_insert = 'INSERT INTO mm_rateing(rate_title) VALUES ("'. $search_text .'")';
      $sql_insert = 'INSERT INTO mm_movies_genres(movie_id, genres_id) VALUES ("'. $search_text .'" ,"'. $search_text1 .'")';
      
      if($conn->query($sql_insert) === TRUE){
        echo 'success';
      }else{
        echo 'error'. $sql_insert . "<br>" . $conn->error; 
      }
  }
  
?>  <form action="" method="get">
       เพิ่ม Actor:
        <input type="text" name="input_search" placeholder="movie_id" >
        <input type="text" name="input_search1" placeholder="genres_id" >
        &emsp;
        <button type="sunmit">
          SUBMIT
        </button>
        <button><a href="actor_list.php">BACK</a></button></th>
       
      </form>
</body>
</html>