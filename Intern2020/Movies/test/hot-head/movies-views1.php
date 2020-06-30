<!doctype html>
<html lang="en">

<head>

  <style>
    .table,
    th,
    td,
    tr {
      margin: auto;
      width: auto;
      border: 3px solid #73AD21;
      padding: 15px;
      text-align: center;
    }
  </style>
  <!-- <style>
		table,
		th,
		td {
			border: 1px solid black;
			text-align: center;
		}
	</style> -->
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>



  <table border="1" cellspacing="0" cellpadding="5">
    <!-- cellspacing คือระยะห่างของตาราง   -->
    <thead>
      <tr>

        <!-- <th> # </th> -->
        <th> Movie </th>
        <th> Plot </th>
        <th> Runtime </th>
        <th> Release </th>
        <th> Income </th>
        <th> Rate </th>
        <th> Director </th>
        <th> Genres </th>
        <th> Companies </th>
        <th> Producer </th>
        <th> Actor </th>
        <th> จัดการ </th>


      </tr>
    </thead>
    <?php
    require('connect_db.php');

    $get_id = $_GET['id'];
    echo $get_id . ' ';
    $sql = "SELECT 
                mm_movics.movie_id,
                mm_movics.movie_title,
                mm_movics.movie_plot,
                mm_movics.movie_runtime,
                mm_movics.movie_release_date,
                mm_movics.movie_income,
                mm_rateing.rate_title,
                mm_director.director_firstname,
                mm_production_companies.pco_title,
                producer_firstname,
                GROUP_CONCAT(mm_genres.genres_title ORDER BY mm_genres.genres_title ASC SEPARATOR '<br>') as group_genres_title
                FROM 
                mm_movics 
                INNER JOIN 
                mm_rateing
                ON 
                mm_movics.rate_id = mm_rateing.rate_id

                INNER JOIN 
                mm_movies_genres
                ON 
                mm_movics.movie_id = mm_movies_genres.movie_id

                INNER JOIN 
                mm_genres

                ON 
                mm_movies_genres.genres_id = mm_genres.genres_id

                INNER JOIN 
                mm_movies_director
                ON 
                mm_movics.movie_id = mm_movies_director.movie_id
                  
                INNER JOIN 
                mm_director

                ON 
                mm_movies_director.director_id = mm_director.director_id
                INNER JOIN 
                mm_movies_production

                ON 
                mm_movics.movie_id = mm_movies_production.movie_id
                  
                INNER JOIN 
                mm_production_companies

                ON 
                mm_movies_production.pco_id = mm_production_companies.pco_id

                INNER JOIN 
                mm_movies_producer
                ON 
                mm_movics.movie_id = mm_movies_producer.movie_id
                  
                INNER JOIN 
                mm_producer

                ON 
                mm_movies_producer.producer_id = mm_producer.producer_id
                WHERE
                mm_movics.movie_id =" . $get_id;

    $movies_result = $conn->query($sql);
    echo $conn->error;
    $count = 1;
    //print_r($movies_result);
    $row = $movies_result->fetch_assoc();
    //print_r($row);

    ?>
    <?php
    echo $row['movie_title'];
    echo '<hr>';

    ?>
    <tr>
      <td> <?= $row['movie_title']; ?> </td>
      <td> <?= $row['movie_plot']; ?> </td>
      <td> <?= $row['movie_runtime']; ?> </td>
      <td> <?= $row['movie_release_date']; ?> </td>
      <td> <?= $row['movie_income']; ?> </td>
      <td> <?= $row['rate_title']; ?> </td>
      <td> <?= $row['director_firstname']; ?> </td>
      <td> <?= $row['group_genres_title']; ?> </td>
      <td> <?= $row['pco_title']; ?> </td>
      <td> <?= $row['producer_firstname']; ?> </td>
      
      <td>
        <?php

        $sql_get_actor = 'SELECT
                  mm_movies_actor.movie_actor_role,
                  mm_actor.actor_firstname
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

          echo $movies ['actor_firstname'];
          
        }

        ?>
        <td><a href="movie-edit1.php?rid=<?=$row['movie_id']?>">แก้ไข </a> <br>
            <a href="genres_in_del.php?rid=<?=$row['movie_id']?>"onclick="return confirm('ยืนยันการลบ');">Del_Genres</a><br>
            <a href="actor_in_del.php?rid=<?=$row['movie_id']?>"onclick="return confirm('ยืนยันการลบ');">Del_Actor</a>
      </td>
    </tr>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </table>
</body>

</html>