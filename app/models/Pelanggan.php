<?php
class Pelanggan {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllPelanggan() {
        $stmt = $this->pdo->query("SELECT * FROM pelanggan");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPelangganById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM pelanggan WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
