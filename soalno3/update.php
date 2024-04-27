<?php 

require "functions.php";

$id = $_GET["id"];
$bukutelpon = query("SELECT * FROM datamhs WHERE id = $id")[0];
if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "
        <script>alert('Data berhasil diubah');
        document.location.href = 'index.php';
        </script>
        ";

    }else {
        echo "Data Gagal diubah";
    }
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ubah Data</title>
    <link rel="stylesheet" href="styles.css">  
</head>
<body>
    <h1>Ubah Data informasi</h1>
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $bukutelpon["id"];?>">
        <ul>
          
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" required id="nama" value="<?= $bukutelpon["nama"];?>">
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" required id="nim" value="<?= $bukutelpon["nim"];?>">
            </li>
            <li>
                <label for="notel">Nomor Telepon :</label>
                <input type="text" name="notel" required id="notel" value="<?= $bukutelpon["notel"];?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" required id="email" value="<?= $bukutelpon["email"];?>">
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>