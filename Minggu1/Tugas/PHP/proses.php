<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $foto = $_FILES["foto"]["name"];
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $fakultas = $_POST["fakultas"];
    $no_hp = $_POST["no_hp"];
    $email = $_POST["email"];
    
    // Simpan foto di folder tertentu
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    
    // Tampilkan hasil biodata
    echo "<h2>Biodata Anda:</h2>";
    echo "<img src='$target_file' alt='Foto Profil'>";
    echo "<p>Nama: $nama</p>";
    echo "<p>NIM: $nim</p>";
    echo "<p>Fakultas: $fakultas</p>";
    echo "<p>Nomor HP: $no_hp</p>";
    echo "<p>Email: $email</p>";
}
?>
