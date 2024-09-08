
<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['user'])) {
    // Jika belum login, arahkan ke halaman login
    header('Location: ./login.php');
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="./style.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-3xl font-bold mb-6">Selamat Datang, <?php echo htmlspecialchars($user['name']); ?>!</h1>
    <p>Anda login sebagai <?php echo htmlspecialchars($user['role']); ?> di lokasi <?php echo htmlspecialchars($user['location']); ?>.</p>
    <!-- Tambahkan konten dashboard sesuai peran pengguna -->
</body>
</html>
