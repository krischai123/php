<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .table,
    th,
    td {
      margin: auto;
      width: auto;
      border: 3px solid #ad2121;
      padding: 10px;
      text-align: center;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <h1> Movie Favorite </h1>
  <table border="1" cellspacing="0" cellpadding="5">
    <!-- cellspacing คือระยะห่างของตาราง   -->
    <thead>
      <tr>

        <!-- <th> # </th> -->
        <th> Movie </th>
        <th> Plot </th>
        <th> Runtime </th>
        <th> Release </th>
        <!-- <th> Income </th>
          <th> Rate </th>
          <th> Director </th>
          <th> Genres </th> -->

      </tr>
    </thead>
    <tbody>
      <?php
      require('connect_db.php');

      $sql = "SELECT * FROM 	mm_movics ";
      $result = $conn->query($sql);
      echo $conn->error;
      $count = 1;

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
      ?>

          <tr>


            <td>
              <a href="movies-views.php?id=<?= $row['movie_id'] ?>">
                <?= $row['movie_title']; ?>
              </a>
            </td>

            <td> <?= $row['movie_plot']; ?> </td>
            <td> <?= $row['movie_runtime']; ?> </td>
            <td> <?= $row['movie_release_date']; ?> </td>


          </tr>
      <?php
          $count++;
        }
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
  </table>
</body>

</html>