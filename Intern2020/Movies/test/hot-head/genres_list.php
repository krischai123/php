
<a href="genres_insert.php">เพิ่มข้อมูล Genres</a><br><br>
<a href="rate_list.php">Back to rate</a><br><br>
<a href="actor_list.php">Go to Actor</a><br>
<table border="1" cellspacing="0" cellpadding="5">
    <!-- cellspacing คือระยะห่างของตาราง   -->
    
    <thead>
        
        <tr>
        

            <th> # </th>
            <!-- <th> Movie </th> -->
            <th> rate </th>
            <!-- <th> Genres </th> -->
            <th> จัดการ </th>
            <!-- <th> Release </th> -->
            <!-- <th> Income </th>
          <th> Rate </th>
          <th> Director </th> -->
          

        </tr>
    </thead>
    <tbody>
        <?php
        require('connect_db.php');

        $sql = "SELECT * FROM   
                                mm_genres";

        $result = $conn->query($sql);
        echo $conn->error;
        $count = 1;

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $count ?></td>
                    
                    <td> <?= $row['genres_title']; ?> </td>
                    <td><a href="genres_edit.php?rid=<?=$row['genres_id']?>">แก้ไข </a> | <a href="genres_del.php?rid=<?=$row['genres_id']?>"onclick="return confirm('ยืนยันการลบ');">ลบ</a>
                | </td>
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