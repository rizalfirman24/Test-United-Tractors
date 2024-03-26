<h2>Input Data</h2>

<form action="" method="post">

<table border="1">
    <tr>
        <td width="130">Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td width="130">Alamat</td>
        <td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td width="130">Umur</td>
        <td><input type="text" name="umur"></td>
    </tr>
    
</table>
<tr>
    <br>
        <td><input type="submit" value="Simpan" name="proses"></td>
    </tr>
</form>

<?php
include "database.php";

$database = new Database();

if(isset($_POST['proses'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $database->simpan($nama, $alamat, $umur);

    echo "Input Data Mahasiswa Berhasil Disimpan";
    header("Location: tampil_data.php");
    exit();
}
?>

