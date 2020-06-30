<a href="rate_Insert.php">เพิ่มข้อมูล Rate</a><br><br>
<a href="genres_list.php">Go to Genres</a><br>
<a href="actor_list.php">Go to Actor</a><br>
<br><table border="1" cellspacing="0" cellpadding="5">
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

        $sql = "SELECT * FROM mm_rateing";

        $result = $conn->query($sql);
        echo $conn->error;
        $count = 1;

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
                <tr>
                    <td><?= $count ?></td>
                    <td> <?= $row['rate_title']; ?> </td>
                    
                    <td><a href="edit_list.php?rid=<?=$row['rate_id']?>">แก้ไข </a> | <a href="rate_de.php?rid=<?=$row['rate_id']?> "onclick="return confirm('ยืนยันการลบ');">ลบ</a>
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