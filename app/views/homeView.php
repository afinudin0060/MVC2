<?php
class HomeView {
    public function render() {
        ?>
        <!DOCTYPE html>
        <html lang="id">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Aplikasi Penjualan</title>
            <style>
                /* Reset margin dan padding pada body */
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                }

                /* Gaya untuk navigasi */
                nav {
                    background-color: #007bff;
                    padding: 10px 0;
                }

                nav ul {
                    list-style-type: none; /* Hilangkan bullet points */
                    margin: 0;
                    padding: 0;
                    display: flex; /* Buat item sejajar horizontal */
                    justify-content: center; /* Posisi menu di tengah */
                }

                nav ul li {
                    margin: 0 15px; /* Jarak antar item */
                }

                nav ul li a {
                    text-decoration: none; /* Hilangkan garis bawah */
                    color: white; /* Warna teks */
                    padding: 10px 20px; /* Jarak dalam tombol */
                    background-color: #0056b3; /* Warna latar tombol */
                    border-radius: 5px; /* Sudut tombol melengkung */
                    transition: background-color 0.3s ease; /* Efek transisi */
                }

                nav ul li a:hover {
                    background-color: #003f88; /* Warna saat hover */
                }

                /* Garis bawah untuk memisahkan navigasi dan konten */
                hr {
                    border: 0;
                    border-top: 2px solid #ddd;
                    margin: 20px 0;
                }
            </style>
        </head>
        <body>
            <nav>
                <ul>
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=barang">Barang</a></li>
                    <li><a href="index.php?page=pelanggan">Pelanggan</a></li>
                    <li><a href="index.php?page=transaksi">Transaksi</a></li>
                </ul>
            </nav>
            <hr>
            <h1>Selamat datang di Aplikasi Penjualan!</h1>
            <p>Ini adalah halaman utama aplikasi.</p>
        </body>
        </html>
        <?php
    }
}
?>
