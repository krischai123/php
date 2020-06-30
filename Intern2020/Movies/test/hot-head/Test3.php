
    <?php
 require('connect_db.php');
 $get_id = $_GET['id'];
    echo $get_id . ' ';
$sql_get_actor = 'SELECT
                            mm_actor.*,
                            mm_movies_actor.movie_actor_role,
                            GROUP_CONCAT(mm_actor.actor_firstname ORDER BY mm_actor.actor_firstname ASC SEPARATOR "<br>") AS actor_firstname
                            FROM
                            mm_actor
                            INNER JOIN
                            mm_movies_actor
                            ON
                            mm_movies_actor.actor_id = mm_actor.actor_id
                            WHERE
                            mm_movies_actor.movie_id = ' . $get_id;
                            

    // echo $sql_get_actor;
    $actor_result = $conn->query($sql_get_actor);
    echo $conn->error;
    //  
    while ($movies = $actor_result->fetch_assoc()) {
      
      print_r($movies);
    ?>

    <?php
      $count++;
    }

    ?>
    <tr>
    
    <td> <?= $row['actor_firstname']; ?> </td>
    </tr>
   