<?php
require_once 'app/models/Transaksi.php';

class TransaksiController {
    private $model;

    public function __construct($pdo) {
        $this->model = new Transaksi($pdo);
    }

    public function index() {
        $transaksis = $this->model->getAllTransaksi(); // Ambil semua data transaksi
        include 'app/views/transaksi.php'; // Tampilkan view transaksi
    }
}
?>
