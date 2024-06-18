<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/maincss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include '../includes/header.php';
    ?>
    <div class="user-detail-mid">
        <div class="user-mid-left">
            <a href="">
                <div class="user-mid-back">
                    <h1><</h1>
                </div>
            </a>
            <div class="user-mid-head">
                <h1><?php echo htmlspecialchars($_SESSION['user']); ?>
            </div>
        </div>
        <div class="user-mid-right">

        </div>
    </div>
    <?php
        include '../includes/footer.php';
        
    ?>
</body>
</html>