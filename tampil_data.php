<?php
include "database.php";

$database = new Database();

$result = $database->tampil();
?>

<h2>Data Mahasiswa</h2>
<br>
<tr>
    <td><a href='input_data.php'>Input Data</a></td>
</tr>

<br>

<table border="1">
    <br>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Umur</th>
        <th>Opsi</th>
    </tr>

    <?php
    $no = 1;
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <tr>
            <td>$no</td>
            <td>".$row['nama']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['umur']."</td>
            <td><a href='?id=".$row['id']."'> Hapus </a></td>
        </tr>";

        $no++;
    }
    ?>
</table>

<?php
if(isset($_GET['id'])){
    $database->hapus($_GET['id']);

    echo "Data Telah Terhapus";
    echo "<meta http-equiv='refresh' content='1;URL=tampil_data.php'>";
}
?>
