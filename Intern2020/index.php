<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where Movies</title>
</head>

<body>
    
    <?php
    $cars = array(
        1 =>
        array(
            "brand"=>"TOYOTA", 
            "model"=>"REVO", 
            "colour"=>"Black", 
            "price"=>900000, 
            "detail"=>array(
                "cc"=>2500, 
                "years"=>2019,
                "country"=>"Japan"
            ) 
        ),
        array(
            "brand"=>"HONDA", 
            "model"=>"JAZZ", 
            "colour"=>"White", 
            "price"=>600000, 
            "detail"=>array(
                "cc"=>1500, 
                "years"=>2017,
                "country"=>"Japan"
            )
        ),
        array(
            "brand"=>"SUZUKI", 
            "model"=>"SWIFT", 
            "colour"=>"Green", 
            "price"=>560000,
            "detail"=>array( 
                "cc"=>1400, 
                "years"=>2019,
                "country"=>"Japan"
            )
        ),
        array(
            "brand"=>"ISUZU", 
            "model"=>"MU-X", 
            "colour"=>"Blonde", 
            "price"=>1200000, 
            "detail"=>array(
                "cc"=>3000, 
                "years"=>2018,
                "country"=>"Japan"
            )
        )
    );
    
echo 'ข้อ 1 </br>';
    $my_cars = array(
            array('Brand' =>    'Benz',   'Model'=> 'Class C', 'color' =>   'Bronze'),
            array('Brand' =>    'Toyota', 'Model'=> 'Revo',    'color' =>   'Black'),
            array('Brand' =>    'Honda',  'Model'=> 'CRV',     'color' =>   'Red'),
            array('Brand' =>    'Nissan', 'Model'=> 'GTR',     'color' =>   'Bule'),
            array('Brand' =>    'Mazzda', 'Model'=> 'RX8',     'color' =>   'Green')
        );
        echo $my_cars[0]['Brand'].' '.$my_cars[0]['Model'].' '.$my_cars[0]['color'].'<br>';
        echo $my_cars[1]['Brand'].' '.$my_cars[1]['Model'].' '.$my_cars[1]['color'].'<br>';
        echo $my_cars[2]['Brand'].' '.$my_cars[2]['Model'].' '.$my_cars[2]['color'].'<br>';
        echo $my_cars[3]['Brand'].' '.$my_cars[3]['Model'].' '.$my_cars[3]['color'].'<br>';
        echo $my_cars[4]['Brand'].' '.$my_cars[4]['Model'].' '.$my_cars[4]['color'].'<br>';
            
        
echo '<br> ข้อ 2 </br>';
             foreach ( $cars as $kay => $value){
                
                echo '<b> Brand </b>'.$value['brand'].' '. '<b> Model </b> '.$value['model'].' 
                '.'<b> Colour </b>'.$value['colour'].' '.'<b> Price </b> '.$value['price'].' '.'<b> CC </b> '.$value['detail']['cc'].' '.'<b> Years </b> '.$value['detail']['years'].' '.'<b> Country </b> '.$value['detail']['country'].'<br>';
            }

            
echo '<br> ข้อ 3 </br>';





    // $my_cars = array(
    //     array('Benz','Class C','Bronze'),
    //     array('Toyota','Revo','Black'),
    //     array('Honda','CRV','Red'),
    //     array('Nissan','GTR','Bule'),
    //     array('Mazzda','RX8','Green')
    // );
    
    // foreach ( $my_cars[1] as $kay => $value){
    //     echo $kay . '  '. $value .'<br> ';
    // }
        // echo $my_cars[1][1].'  '. $my_cars[2][2];

        // foreach ( $my_cars[3] as $kay => $value){
        //     print_r($value);
        //     echo '  '. $kay .'<br> ';
        // }


    // $my_fruit = array(
    //     'Banana' => 'Yellow',
    //     'Mango' => 'Green',
    //     'Melon' => 'Red',
    //     'Apple' => 'Red',
    //     'Orange' => 'Orange',
    //     'Coconut' => 'Green'
    // );

    // foreach ( $my_fruit as $kay => $val){
    //     echo $kay . ' KAY IS ' .$val . '<br>';
    // }


    // $car_1 = 'Benz';
    // $car_2 = 'Toyota';
    // $car_3 = 'Honda';

    // $my_cars = array('Benz','Toyota','Honda');
    // $my_cars[3] = 'Nissan';
    // $my_cars[4] = 'Mazzda'; //เพิ่มข้อมูล
    // $my_cars[5] = 'Isuzu'; //อัพเดดมูลของตำแหน่งเดิม
    // print_r($my_cars); //โช array
    // echo 'I like '.$my_cars[0]
    
    // $max = count($my_cars);

    // for ($i=0; $i < $max; $i++){
    //     echo $my_cars[$i];
    //     echo '<br>';
    // }

    // foreach ($my_cars as $kay => $val){
    //     echo $kay . ' KAY IS ' .$val . '<br>';
    // }
    




    // $k=50;
    // $count1 =0;
    // $count2 =0;
    //  for($i=1; $i<=$k; $i+=2){

    //      echo $i .'<br>';
    //     if($i%7 == 0){
    //         $count1 = $count1+1; 
    //     }else{
    //         $count2 = $count2+1;
    //     }
    // }
    // echo 'หาร 7 ลงตัวมีจำนวน '.  $count1 .'<br>';
    // echo 'หาร 7 ไม่ลงตัวมีจำนวน' . $count2;
// $a = 1;
// $b = 5;
// if($a==1){
//     $a=$b;
// }
//     echo $a;



// $a = 1;
// $b = 50;
// while($a<=$b){
//     echo $a.' '. $b . '<br>';
//     $a++;
// }





//    for($i=0; $i<=6; $i++){
//     echo '<br>';
//         for($j=0; $j<=6; $j++){
//         if($i > $j ){
//             echo '*';
//         }
//     }        
// }
    




// $i = 0;
// $count_by = 2;

// while ($i <= 50) {
//     echo "<br> $i";
//     $i += $count_by;
// }
    // $max = 50;
    // for ($i=0; $i=10; $i++){
    //     echo $i.'br';
    // }
    // echo '<hr>';

    // $a = 0;
    // while($a <=2){
    //     echo $a.'<br>';
    //     $a++;
    // }

    // $a = 50;
    // while ($a <= 5) {
    //     echo $a . '<br>';
    //     // $a = $a+1;
    //     $a++;
    // }

    // for($i=0; $i<50 ; $i++){
    //     echo $i. 'br';
    // }
    // echo '<hr>';

    // $a = 0;
    // while($a<=5){
    //     echo $a . '<br>';
    //     $a++;
    // }

    // $favcolor = "นาย";

    // switch ($favcolor) {
    //     case "นาย":
    //         echo "สวัสดีครับ";
    //         break;
    //     case "นาง":
    //         echo "สวัสดีค่ะ";
    //         break;
    //     case "นางสาว":
    //         echo "สวัสดีค่ะ";
    //         break;
    //     default:
    //         echo "ไม่มีในระบบ";
    // }







    // $name_title = 'นาง'

    // $Number = 0;

    // if($Number%2 == 0 && $Number%2   !=0 ){
    // echo "เลขคู่";
    // }
    // else if($number%2 != 0){
    // echo "เลขคี่";
    // }
    // else{
    // echo "เลข 0";
    // }



    // $x = 'เด็ก' ;

    // if($x =='นาง' || $x =='นางสาว' || $x =='เด็กหญิง'){
    //     echo 'สวัสดีค่ะ';
    // }
    // else if($x == 'เด็กชาย' ||  $x == 'นาย' ){
    //     echo 'สวัสดีครับ';

    // }else{
    //     echo 'ไม่มีครับ/ค่ะ'. $x ;
    // }


    // $t = date("H");

    // if ($t < "10") {
    // echo "Have a good morning!";
    // } elseif ($t < "20") {
    // echo "Have a good day!";
    // } else {
    // echo "Have a good night!";
    // }       







    // $x = 'เท่ากับ';
    // $y = 100;
    // $z = 2;

    // echo $x . ' ' . $y    
    // echo '<h1>' . $x . '</h1>';
    // echo 'hi, mama'

    // echo $x . ' ' . $y ** $z;

    // echo $y * $z ;
    ?>

<table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>#</th>
            <th>BRAND</th>
            <th>MODEL</th>
            <th>COLOUR</th>
            <th>PRICE</th>
            <th>DETAIL</th>
        </tr>
<?php


     for( $key=1; $key<= 4; $key++){
        foreach ( $cars as $key => $value){
             // print_r($key++);

    ?>
        <tr>
            <td> <?php echo '<p>'.$key.'</p>'; ?> </td>
            <td> <?php echo '<p>'.$value['brand'].'</p>'; ?> </td>
            <td> <?php echo '<p>'.$value['model'].'</p>'; ?> </td>
            <td> <?php echo '<p>'.$value['colour'].'</p>'; ?> </td>
            <td> <?php echo '<p>'.$value['price'].'</p>'; ?> </td>
            <td> <?php echo '<p>'.$value['detail']['cc'].'</br>'.
            $value['detail']['years'].'</br>'.
            $value['detail']['country'].'</br>'.'</p>'; ?>
        </td>
            
        </tr>
       </tr>
       <?php
        }
     }
    
    ?>  
</table>
</body>

</html>