<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
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
    </style>
</head>
<body>
    <h1>Data Transaksi</h1>
    <table>
        <tr>
            <th>No</th>
            <th>ID Transaksi</th>
            <th>Kode Barang</th>
            <th>ID Pelanggan</th>
            <th>Jumlah Transaksi</th>
            <th>Total</th>
            <th>Tanggal</th>
        </tr>
        <?php if (!empty($transaksis)): ?>
            <?php foreach ($transaksis as $transaksi): ?>
                <tr>
                    <td><?php echo $transaksi['no']; ?></td>
                    <td><?php echo $transaksi['id_trans']; ?></td>
                    <td><?php echo $transaksi['kodebrg']; ?></td>
                    <td><?php echo $transaksi['idpelanggan']; ?></td>
                    <td><?php echo $transaksi['jumlahtrans']; ?></td>
                    <td><?php echo $transaksi['total']; ?></td>
                    <td><?php echo $transaksi['tanggal']; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Tidak ada data transaksi yang tersedia.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
