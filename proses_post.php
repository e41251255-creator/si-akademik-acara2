<?php
$username = $_POST['username'] ?? '';

echo "<h2>Hasil Login</h2>";
echo "Username: " . htmlspecialchars($username);
echo "<br>Data berhasil dikirim menggunakan metode POST.";
?>