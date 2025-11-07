<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama  = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
<form method="POST">
    Nama: <input type="text" name="nama" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit" name="submit">Tambah</button>
</form>
