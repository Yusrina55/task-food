<?php
// src/routes/routes.php

require_once '../controllers/UserController.php';
require_once '../../config/database.php';

session_start();

$userController = new UserController($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // Proses login
        if ($userController->login($email, $password)) {
            // Jika login berhasil, arahkan ke dashboard
            header('Location: ./views/dashboard.php');
            exit(); // Pastikan script berhenti setelah header location
        } else {
            // Jika login gagal, bisa menampilkan pesan kesalahan atau arahkan kembali ke halaman login
            echo "Login failed! Email atau password salah.";
        }
    } elseif ($_POST['action'] === 'register') {
        // Handle register
    }
}
?>
