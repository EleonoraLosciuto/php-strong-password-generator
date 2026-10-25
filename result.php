<?php
    session_start();
    
    if (empty($_SESSION['password_result'])) {
        header('Location:index.php');
        exit();
    };
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La tua password</title>
</head>
<body>

<h1>
    <?php 
        echo "La tua password: " . $_SESSION['password_result'];
    ?>

</h1>
    
</body>
</html>