<html>

<head>
    <title>เมื่อไหร่จะเสร็จ</title>
</head>

<body>
    <?php

    ini_set('display_errors', 1);
    error_reporting(~0);


    $servername = "localhost"; //ชื่อขึ้นต้นหน้าเว็บ
    $username = "root"; // root คือค่าต้นของการเรียกชื่อ ตัว sql
    $password = ""; //ถ้าไม่มีก็ว่างไว้
    $movies = "my_movies"; // เรียกฐานข้อมูลใน sql


    // Create connection
    $conn = new mysqli($servername, $username, $password, $movies);
    $strKeyword = '';
    $strselect =  0;

    if($_POST){
        $strKeyword = $_POST['txtKeyword'];
        $strselect = $_POST['select'];
    }
    // <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword; 


    ?>

    <form name="frmSearch" method="post" action="">
        <table width="599" border="1">
            <tr>
                <th>Keyword
                    <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword; ?>">

                    <select name="select" type="select" id="select" value="<?php echo $strselect; ?>">
                        <?php
                        $query = "SELECT * FROM `mm_rateing`";
                        
                        $result1 = mysqli_query($conn, $query);
                        echo $conn->error;
                        
                        while ($row1 = mysqli_fetch_array($result1)) {
                            
                            ?>
                                          
                            <option value="<?=$row1['rate_id'];?>">
                                <?php echo $row1['rate_title']; ?></option> 
                            <?php

                        }
                        ?>
                        <input type="submit" value="Search">
                        <button><a href="Test2.php">Back</a></button></th>
            </tr>
        </table>
    </form>

    <?php





    ?>
    <table width="600" border="1">
        <tr>
            <th width="91">
                <div align="center">movie_id </div>
            </th>
            <th width="98">
                <div align="center">movie_title </div>
            </th>
            <th width="198">
                <div align="center">movie_plot </div>
            </th>
            <th width="97">
                <div align="center">movie_runtime </div>
            </th>
            <th width="71">
                <div align="center">movie_release_date </div>
            </th>
            <th width="71">
                <div align="center">movie_income </div>
            </th>
            <th width="71">
                <div align="center">rate_id </div>
            </th>
        </tr>
        <?php

        $Test = '';
        if($strselect != 0){
            $Test = " AND mm_rateing.rate_id =".$strselect;
        }


        $sql = "SELECT * 
                    FROM mm_movics 
                    INNER JOIN 		
                    mm_rateing
                    ON 
                    mm_movics.rate_id = mm_rateing.rate_id 

                    WHERE movie_title LIKE '%" . $strKeyword . "%' AND mm_rateing.rate_id =".$strselect;




        $query = mysqli_query($conn, $sql);
        echo $conn->error;


        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        ?>
            <tr>

                <td>
                    <div align="center"><?php echo $result["movie_id"]; ?></div>
                </td>
                <td align="right"><?php echo $result["movie_title"]; ?></td>
                <td align="right"><?php echo $result["movie_release_date"]; ?></td>
                <td>
                    <div align="center"><?php echo $result["movie_runtime"]; ?></div>
                </td>
                <td align="right"><?php echo $result["movie_release_date"]; ?></td>
                <td align="right"><?php echo $result["movie_income"]; ?></td>
                <td align="right"><?php echo $result["rate_title"]; ?></td>
            </tr>
        <?php

        }

        ?>
    </table>
    <?php

    mysqli_close($conn);
    ?>
</body>

</html>