<?php

require 'functions.php';

$id=$_GET["id"];

$kartun = query("SELECT * FROM kartun WHERE id=$id");
//chek apaakah tombol submit sudah ditekan atau belum

if (isset($_POST["submit"])) {
        if (ubah($data)>0) {
            echo"
            <script>
                alert('data berhasil diubah')
                document.location.href='index2.php'
            </script>
            ";
        }else{
            echo"
            <script>
                alert('data gagal ubah')
                document.location.href='index2.php'
            </script>
            ";
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah kartun</title>
</head>
<body>
    <h3>Ubah Data Mahasiswa</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $kartun[0]["id"]?>">
       <label for="nama">Nama : </label> <input type="text" name="nama" id="nama" required value="<?php echo $kartun[0]["nama"]?>"><br>
       <label for="nim">Nim   : </label> <input type="text" name="nim" id="nim" required value="<?php echo $kartun[0]["nim"]?>"><br>
        <label for="gambar">Gambar :</label><input type="text" name="gambar" id="gambar" required value="<?php echo $kartun[0]["gambar"]?>">
       <button type="submit" name="submit">Ubah Data</button>
    
    </form>
</body>
</html>