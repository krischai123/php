<?php
    require("connect_db.php");

    if($_GET && isset($_GET['rid'])) {
        $movie_id = $_GET['rid'];

        $sql_delete = 'DELETE FROM mm_movies_genres WHERE movie_id ='.$movie_id;

    if($conn->query($sql_delete) === TRUE){

      header("Location: genres_list1.php"); 
      
      }else{
      echo 'error deleting record:' . "<br>" . $conn->error;
      echo '<br> <a href="actor_list.php">Come Back To Actor List</a> <br>' ;
      }
      

    }
?>
