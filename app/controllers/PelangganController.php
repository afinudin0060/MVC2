<?php
require_once 'app/models/Pelanggan.php';

class PelangganController {
    private $model;

    public function __construct($pdo) {
        $this->model = new Pelanggan($pdo);
    }

    public function index() {
        $pelanggans = $this->model->getAllPelanggan(); // Ambil semua data pelanggan
        include 'app/views/pelanggan.php'; // Tampilkan view pelanggan
    }
}
?>
