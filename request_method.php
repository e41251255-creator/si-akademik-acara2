<?php
$method = $_SERVER['REQUEST_METHOD'];

echo "<h2>Deteksi Metode Request</h2>";

if ($method == 'GET') {
    echo "Request menggunakan metode GET.";
} elseif ($method == 'POST') {
    echo "Request menggunakan metode POST.";
} else {
    echo "Metode request tidak dikenali.";
}
?>

<form method="POST">
    <button type="submit">Kirim POST</button>
</form>