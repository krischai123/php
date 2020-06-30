
<a href="actor_insert.php">เพิ่มข้อมูล Actor</a><br><br>
<a href="genres_list.php">Go to Genres</a><br>
<a href="rate_list.php">Back to rate</a><br><br>
<table border="1" cellspacing="0" cellpadding="5">
    <!-- cellspacing คือระยะห่างของตาราง   -->
    
    <thead>
        
        <tr>
        

            <th> # </th>
            <!-- <th> Movie </th> -->
            <th> รายชื่อนักแสดง </th>
            <!-- <th> Genres </th> -->
            <th> บ้านเกิด </th>
            <th> วัดเกิด </th>
            <th> จัดการ </th>
          <!-- <th> Rate </th>
          <th> Director </th> -->
          

        </tr>
    </thead>
    <tbody>
        <?php
        require('connect_db.php');

        $sql = "SELECT * FROM   
                                mm_actor";

        $result = $conn->query($sql);
        echo $conn->error;
        $count = 1;

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $count ?></td>
                    
                    
                    <td> <?= $row['actor_firstname'];?> <?= $row['actor_midname'];?> <?= $row['actor_lastname'];?> </td>
                    <td> <?= $row['actor_birthplae'];?></td>
                    <td> <?= $row['actor_birthdate'];?></td>
                    <td><a href="actor_edit.php?rid=<?=$row['actor_id']?>">แก้ไข </a> | <a href="actor_del.php?rid=<?=$row['actor_id']?>"onclick="return confirm('ยืนยันการลบ');">ลบ</a>
                 </td>
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