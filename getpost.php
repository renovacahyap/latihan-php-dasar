<?php
//$x=10;
//function tampilx(){
  //  global $x;
    //echo $x;    
//}
//tampilx();
$mahasiswa = array(
    array(   "nama" => "RENOVA CAHYA PUTRA",
            "nim" => "201851058"
),
    array(
        "nama"=>"Bagas",
        "nim"=>"201851056"
    )
    );
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
    <?php foreach($mahasiswa as $mhs) {?>
    <li>
    <a href="get.php?nama=<?php echo $mhs["nama"];?>"><?php echo $mhs["nama"];?></a>
    </li>
    <?php } ?>
    </ul>

</body>
</html>