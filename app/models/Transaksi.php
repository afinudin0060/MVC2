<?php
class Transaksi {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllTransaksi() {
        $stmt = $this->pdo->query("SELECT * FROM transaksi");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Jika Anda perlu menambah, mengedit, atau menghapus transaksi, Anda bisa menambahkan metode di sini
}
?>
