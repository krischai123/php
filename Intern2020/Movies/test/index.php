<!doctype html>
<html lang="en">

<head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
		table,
		th,
		td {
			border: 1px solid black;
			text-align: center;
		}
	</style>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "my_movies";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT 		mm_movics.movie_title,
						mm_movics.movie_runtime,
						mm_movics.movie_release_date,
						mm_rateing.rate_title,
						mm_movics.movie_income,
						mm_movics.movie_plot,
                		mm_genres.genres_title,
						-- mm_actor.actor_firstname,
                		mm_production_companies.pco_title, 
						GROUP_CONCAT(mm_genres.genres_title ORDER BY mm_genres.genres_title ASC SEPARATOR '<br>') AS group_genres_title	
						-- GROUP_CONCAT(mm_actor.actor_firstname ORDER BY mm_actor.actor_firstname ASC SEPARATOR '<br>') AS actor_firstname
	
			FROM 	mm_movics 
					
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
				mm_movies_production
			ON
				mm_movics.movie_id = mm_movies_production.movie_id
			INNER JOIN
				mm_production_companies
			ON	 
				mm_movies_production.pco_id = mm_production_companies.pco_id
			-- INNER JOIN
			-- 	mm_movies_actor
			-- ON
			-- 	mm_movics.movie_id = mm_movies_actor.movie_id
			-- INNER JOIN
			-- 	mm_actor
			-- ON
			-- 	mm_movies_actor.actor_id = mm_actor.actor_id
			WHERE
				mm_movics.movie_id
			GROUP BY
				mm_movics.movie_title
			ORDER BY
				mm_movics.movie_title ASC";
	
			
	$result = $conn->query($sql);
	echo $conn ->error;
	$couter = 1;
	if ($result->num_rows > 0) {
		echo "<table>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Plot</th>
			<th>Runtime</th>
			<th>Release_date</th>
			<th>Income($)</th>
			<th>Rate</th>
			<th>Pco</th>
			<th>Genres</th>
			
			

			</tr>";
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			echo "<tr><td>"
			.$couter ."</td>
			
			<td><a href=".$row["movie_title"] ."</a></td>
			
			<td>".$row["movie_plot"]."</td>
			
			
			<td>"
			.$row["movie_runtime"] . "</td><td>"
		 	.$row["movie_release_date"] . "</td><td>"
			.$row["movie_income"] . "</td><td>"
			.$row["rate_title"] . "</td><td>"
			.$row["pco_title"] . "</td><td>"
			// .$row["actor_firstname"] . "</td><td>"
			.$row["group_genres_title"] . "</td></tr>";
			$couter++;
		}
		echo "</table>";
	} else {
		echo "Unknow";
	}

	$conn->close();
	?>
	<a href="movies-views" > 
	</a> 
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>