<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
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
            margin-right: 5px; /* Jarak antar tombol */
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
    <h1>Data Pelanggan</h1>
    <a href="index.php?page=tambah_pelanggan" class="button button-add">Tambah Data Pelanggan</a> <!-- Link untuk tambah pelanggan -->
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th> <!-- Kolom aksi -->
        </tr>
        <?php if (!empty($pelanggans)): ?>
            <?php foreach ($pelanggans as $pelanggan): ?>
                <tr>
                    <td><?php echo $pelanggan['no']; ?></td>
                    <td><?php echo $pelanggan['id_plg']; ?></td>
                    <td><?php echo $pelanggan['nama_plg']; ?></td>
                    <td><?php echo $pelanggan['alamat_plg']; ?></td>
                    <td>
                        <a href="index.php?page=edit_pelanggan&id=<?php echo $pelanggan['id']; ?>" class="button button-edit">Edit</a>
                        <a href="index.php?page=hapus_pelanggan&id=<?php echo $pelanggan['id']; ?>" class="button button-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Tidak ada data pelanggan yang tersedia.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
