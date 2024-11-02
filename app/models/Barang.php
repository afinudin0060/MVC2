<?php
class Barang {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo; // Menerima objek PDO
    }

    public function getAllBarang() {
        $stmt = $this->pdo->query("SELECT * FROM barang");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBarangById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM barang WHERE no = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
