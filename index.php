<?php
require 'app/config/db.php'; // Koneksi ke database

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        require 'app/views/HomeView.php';
        $view = new HomeView();
        $view->render();
        break;

    case 'barang':
        require 'app/controllers/BarangController.php';
        $controller = new BarangController($pdo);
        $controller->index();
        break;
    
    case 'pelanggan':
        require 'app/controllers/PelangganController.php';
        $controller = new PelangganController($pdo);
        $controller->index();
        break;

    case 'transaksi':
        require 'app/controllers/TransaksiController.php';
        $controller = new TransaksiController($pdo);
        $controller->index();
        break;

    default:
        echo "Halaman tidak ditemukan!";
        break;
}
?>
