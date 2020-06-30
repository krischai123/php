<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
    // if(isset($_POST['input_text1'])){
    //     echo $_POST['input_text1'];
    //     echo '<hr>';
    }
    if(isset($_POST['textarea'])){
        echo $_POST['textarea'];
        echo '<hr>';
    }
         
    if(isset($_POST['rao_1'])){
        echo $_POST['rao_1'];
        echo '<hr>';
    }
    
    if(isset($_POST['check_list'])){
      // Loop to store and display values of individual checked checkbox.
      foreach($_POST['check_list'] as $selected){
      echo $selected."</br>";
      }
   }else{
      echo 'ไม่กำหนด'.'<br>';
  }
    
    if(isset($_POST['cars1'])){
        echo $_POST['cars1'];
        echo '<hr>';
    }
    ?>
    <br><a href="moviedb.php">กลับ</a>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>