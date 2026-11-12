<?php
$keyword = $_GET['keyword'] ?? '';

echo "<h2>Hasil Pencarian</h2>";
echo "Kata kunci yang dicari: " . htmlspecialchars($keyword);
?>