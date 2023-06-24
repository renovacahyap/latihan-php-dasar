<?php
//koneksi ke data base
$conn = mysqli_connect("localhost", "root", "", "latihan");
//ambil data dari tabel kartun / query data kartun
$result = mysqli_query($conn, "SELECT * FROM kartun");
//$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <h3>Selamat Datang! </h3>
    <table border=1 cellspacing="0" cellpadding="10">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Gambar</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td>
                    <?php echo $i; ?>
                </td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["nim"] ?></td>
                <td><img src="img/<?php echo $row["gambar"] ?>" alt="Doraemon" width="50"></td>
            </tr>
            <?php $i++ ?>
        <?php } ?>

    </table>
</body>

</html>