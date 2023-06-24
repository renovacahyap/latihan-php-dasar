<?php
    if ( !isset($_GET["nama"])) {
        //redirect
        header("Location: getpost.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <li><?php echo $_GET["nama"]; ?></li>
    </ul>
    <a href="getpost.php"><p>kembali</p></a>
</body>
</html>