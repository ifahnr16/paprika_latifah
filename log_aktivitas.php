<?php
include('koneksi.php'); // Menghubungkan ke database

// Query untuk mengambil semua data dari tabel log_aktivitas
$query = "SELECT * FROM log_aktifitas ORDER BY waktu DESC";
$result = mysqli_query($konek_db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Aktivitas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="text-center">Log Aktivitas</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Log</th>
                <th>Nama</th>
                <th>Log</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Looping untuk menampilkan data log aktivitas
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['id_log']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['log']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['waktu']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>Tidak ada log aktivitas.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<footer class="container-fluid text-center">
    <p>S1-Teknik Informatika 2024</p>
</footer>
</body>
</html>
