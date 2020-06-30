<!doctype html>
<html lang="en">
  <head>
  <style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
  
}
</style>
    <title>Movies Where</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <table border="1" cellspacing="0" cellpadding="5" class="">
        <tr>
            <th>#</th>
            <th>Name Movis</th>
            <th>Plot Movies</th>
            <th>PRICE</th>
            <th>Releasedate</th>
            <th>Income</th>
            <th>Rate</th>
            <th>Actor</th>
            <th>Director</th>
        </tr>
<?php
$cars = array(
    1 =>
    array(
        "Name"=>"Captain Marvel", 
        "plot movies"=>"Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.", 
        "movie_runtime"=>"123min" , 
        "movie_release_date"=>"8/March/2019",
        "movie_income"=>"$1,128,274,794",
        "rate"=>' PG13',
        "actor"=>array(
            "firstname"=>'Brianne', 
            "midname"=>'Sidonie',
            "lastname"=>"Desaulniers.",
            "nationality"=>"New York City",
            "birthdate"=>"October 1, 1989",
        ),
        "actor1"=>array(
            "firstname1"=>'Nicholas', 
            "midname1"=>'Joseph',
            "lastname1"=>"Fury Sr.",
            "nationality1"=>"American",
            "birthdate1"=>"July 4, 1950",
        ),
        "actor2"=>array(
            "firstname2"=>'Paul', 
            "midname2"=>'Benjamin',
            "lastname2"=>"Mendelsohn",
            "nationality2"=>"Australian.",
            "birthdate2"=>"April 3, 1969",
        ),
        "actor3"=>array(
            "firstname3"=>'David', 
            "midname3"=>'Jude',
            "lastname3"=>"Heyworth Law.",
            "nationality3"=>"English",
            "birthdate3"=>"December 29, 1972",
        ),
        "actor4"=>array(
            "firstname4"=>'Annette', 
            "midname4"=>'Carol',
            "lastname4"=>"Bening",
            "nationality4"=>"American",
            "birthdate4"=>"May 29, 1958",
        ),

        "director"=>array(
            "firstname"=>'Anna', 
            "midname"=>'',
            "lastname"=>"Boden",
            "nationality"=>"United states",
            "birthdate"=>"December 20, 1979",
        ),
        "director1"=>array(
            "firstname1"=>'Ryan K.', 
            "midname1"=>'',
            "lastname1"=>"Fleck",
            "nationality1"=>"United states",
            "birthdate1"=>"September 20, 1976 ",
        )    
        
    ),
    // array(
    //     "Name"=>"Captain Marvel", 
    //     "plot movies"=>"Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.", 
    //     "movie_runtime"=>"123min" , 
    //     "movie_release_date"=>"8/March/2019",
    //     "movie_income"=>"$1,128,274,794",
    //     "rate"=>' PG13',
    // ),
);

     for( $key=1; $key<= 1; $key++){
        foreach ( $cars as $key => $value){
             // print_r($key++);

    ?>
        <tr>
            <td> <?php echo '<p>'.$key.'</p>'; ?> </td>
            <td> <?php echo '<p>'.$value['Name'].'</p>'; ?> </td>
            <td> <?php echo '<p>'.$value['plot movies'].'</p>'; ?> </td>
            <td> <?php echo '<p>'.$value['movie_runtime'].'</p>'; ?> </td>
            <td> <?php echo '<p>'.$value['movie_release_date'].'</p>'; ?> </td>
            <td> <?php echo '<p>'.$value['movie_income'].'</p>'; ?> </td>
            <td> <?php echo '<p>'.$value['rate'].'</p>'; ?> </td>
           
    
            <td> <?php echo '<p>'.'<b>Name </b>'.$value['actor']['firstname'].' '.
            $value['actor']['midname'].' '.
            $value['actor']['lastname'].' '.
            '<b>Nationality </b>'.$value['actor']['nationality'].'</br>'.
            '<b>Birthdate </b>'.$value['actor']['birthdate'].'</br>'.'</p>'; ?>

            <?php echo '<p>'.'<b>Name </b>'.$value['actor1']['firstname1'].' '.
            $value['actor1']['midname1'].' '.
            $value['actor1']['lastname1'].' '.
            '<b>Nationality </b>'.$value['actor1']['nationality1'].'</br>'.
            '<b>Birthdate </b>'.$value['actor1']['birthdate1'].'</br>'.'</p>'; ?>

            <?php echo '<p>'.'<b>Name </b>'.$value['actor2']['firstname2'].' '.
            $value['actor2']['midname2'].' '.
            $value['actor2']['lastname2'].' '.
            '<b>Nationality </b>'.$value['actor2']['nationality2'].'</br>'.
            '<b>Birthdate </b>'.$value['actor2']['birthdate2'].'</br>'.'</p>'; ?>

            <?php echo '<p>'.'<b>Name </b>'.$value['actor3']['firstname3'].' '.
            $value['actor3']['midname3'].' '.
            $value['actor3']['lastname3'].' '.
            '<b>Nationality </b>'.$value['actor3']['nationality3'].'</br>'.
            '<b>Birthdate </b>'.$value['actor3']['birthdate3'].'</br>'.'</p>'; ?>

            <?php echo '<p>'.'<b>Name </b>'.$value['actor4']['firstname4'].' '.
            $value['actor4']['midname4'].' '.
            $value['actor4']['lastname4'].' '.
            '<b>Nationality </b>'.$value['actor4']['nationality4'].'</br>'.
            '<b>Birthdate </b>'.$value['actor4']['birthdate4'].'</br>'.'</p>'; ?>

        </td>
        <td>
        <?php echo '<p>'.'<b>Name </b>'.$value['director']['firstname'].' '.
            $value['director']['midname'].' '.
            $value['director']['lastname'].' '.
            '<b>Nationality </b>'.$value['director']['nationality'].'</br>'.
            '<b>Birthdate </b>'.$value['director']['birthdate'].'</br>'.'</p>'; ?>

        <?php echo '<p>'.'<b>Name </b>'.$value['director1']['firstname1'].' '.
            $value['director1']['midname1'].' '.
            $value['director1']['lastname1'].' '.
            '<b>Nationality </b>'.$value['director1']['nationality1'].'</br>'.
            '<b>Birthdate </b>'.$value['director1']['birthdate1'].'</br>'.'</p>'; ?>  

        </td>
            
        </tr>
       </tr>
       <?php
        }
     }
    
    ?>  
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>