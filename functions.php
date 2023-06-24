<?php
//koneksi database
$conn=mysqli_connect("localhost","root","","latihan");

function query($query){
    global $conn;

    $result=mysqli_query($conn,$query);
    
    $rows=array();

    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nama=htmlspecialchars($_POST["nama"]);
    $nim= htmlspecialchars($_POST["nim"]);
    $gambar= htmlspecialchars($_POST["gambar"]);
        // insert query 
        $query="INSERT INTO kartun VALUES('','$nama','$nim','$gambar')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM kartun WHERE id=$id");
    mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id=$_POST["id"];
    $nama=htmlspecialchars($_POST["nama"]);
    $nim= htmlspecialchars($_POST["nim"]);
    $gambar= htmlspecialchars($_POST["gambar"]);
        // insert query 
        $query="UPDATE kartun SET nama='$nama',nim='$nim',gambar='$gambar' WHERE id=$id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);

}

function cari($keyword){
    $query="SELECT * FROM kartun WHERE nama = '$keyword' ";
    return query($query);

}
?>