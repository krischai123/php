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
  $search_text2 = '';
  $search_text3 = '';
  $search_text4 = '';
  $search_text5 = '';
  if($_GET && isset($_GET['input_search'])){
      $search_text = $_GET['input_search'];
      $search_text1 = $_GET['input_search'];
      $search_text2 = $_GET['input_search'];
      $search_text3 = $_GET['input_search'];
      $search_text4 = $_GET['input_search'];
      $search_text5 = $_GET['input_search'];

      //$sql_insert = 'INSERT INTO mm_rateing(rate_title) VALUES ("'. $search_text .'")';
      $sql_insert = 'INSERT INTO mm_movics(movie_title,  movie_plot, movie_runtime, movie_release_date, movie_income,	rate_id) VALUES ("'. $search_text .'" ,"'. $search_text1 .'", "'. $search_text2 .'","'. $search_text3 .'","'. $search_text4 .'","'. $search_text5 .'")';
      
      if($conn->query($sql_insert) === TRUE){
        echo 'success';
      }else{
        echo 'error'. $sql_insert . "<br>" . $conn->error; 
      }
  }
  
?>  <form action="" method="get">
       เพิ่ม Actor:
        <input type="text" name="input_search" placeholder="movie_title" >
        <input type="text" name="input_search1" placeholder="movie_plot" >
        <input type="text" name="input_search2" placeholder="movie_runtime" >
        <input type="date" name="input_search3" placeholder="movie_release_date" >
        <input type="text" name="input_search4" placeholder="movie_income" >
        <input type="text" name="input_search5" placeholder="rate_id" >
        &emsp;
        <button type="sunmit">
          SUBMIT
        </button>
        <button><a href="actor_list.php">BACK</a></button></th>
       
      </form>
</body>
</html>