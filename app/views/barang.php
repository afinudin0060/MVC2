<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        /* Gaya untuk tombol */
        .button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            color: white;
        }

        .button-add {
            background-color: #28a745; /* Hijau untuk tambah */
        }

        .button-edit {
            background-color: #ffc107; /* Kuning untuk edit */
        }

        .button-delete {
            background-color: #dc3545; /* Merah untuk hapus */
        }

        /* Hover effect untuk tombol */
        .button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <h1>Data Barang</h1>
    <a href="index.php?page=tambah_barang" class="button button-add">Tambah Data Barang</a> <!-- Link untuk tambah barang -->
    <table>
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Stok Barang</th>
            <th>Aksi</th> <!-- Kolom aksi -->
        </tr>
        <?php if (!empty($barangs)): ?>
            <?php foreach ($barangs as $barang): ?>
                <tr>
                    <td><?php echo $barang['no']; ?></td>
                    <td><?php echo $barang['kode_brg']; ?></td>
                    <td><?php echo $barang['nama_brg']; ?></td>
                    <td><?php echo $barang['stok_brg']; ?></td>
                    <td>
                        <a href="index.php?page=edit_barang&id=<?php echo $barang['no']; ?>" class="button button-edit">Edit</a>
                        <a href="index.php?page=hapus_barang&id=<?php echo $barang['no']; ?>" class="button button-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Tidak ada data barang yang tersedia.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
