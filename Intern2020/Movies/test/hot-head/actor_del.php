<?php
    require("connect_db.php");

    if($_GET && isset($_GET['rid'])) {
        $actor_id = $_GET['rid'];

        $sql_delete = 'DELETE FROM mm_actor WHERE actor_id ='.$actor_id;


    if($conn->query($sql_delete) === TRUE){

      header("Location: actor_list.php"); 
      
      }else{
      echo 'error deleting record:' . "<br>" . $conn->error;
      echo '<br> <a href="actor_list.php">Come Back To Actor List</a> <br>' ;
      }
      

    }
?>
