<?php
require_once 'app/models/Barang.php';

class BarangController {
    private $model;

    public function __construct($pdo) {
        $this->model = new Barang($pdo);
    }

    public function index() {
        $barangs = $this->model->getAllBarang(); // Ambil semua data barang
        include 'app/views/barang.php'; // Pastikan kita menggunakan view ini
    }
}
?>
