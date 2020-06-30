<!DOCTYPE html>
<?php
    session_start();
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <?php
        // destroy the session
            session_destroy();
    ?>
</body>
</html>