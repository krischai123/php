<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "my_movies";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `mm_rateing`";

// for method 1

$result1 = mysqli_query($connect, $query);




?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <!--Method One-->

        <select>

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        

        

    </body>

</html>
