<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
</head>

<body>
    <div class="container mt-3">
        <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">Beranda</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="anggota.php">Anggota</a></li>
                        <li class="nav-item"><a class="nav-link" href="buku.php">Buku</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Transaksi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Laporan</a></li>
                        <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">Disabled</a></li>
                    </ul>
                </div>
            </div>
        </nav> -->

        <h1>Data Pesanan Solania</h1>
        <!-- <a href="tambah_anggota.php"><button type="button" class="btn btn-link">Tambah Data</button></a> -->

        <?php
        // Sertakan file koneksi
        include 'koneksi.php';

        // SQL query untuk mengambil data dari tabel
        $sql = "SELECT * FROM pesan";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Menampilkan data dalam bentuk tabel HTML
            echo '
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No WA/Telpon</th>
                                <th>Paket Pesanan</th>
                            </tr>
                        </thead>
                        <tbody>';

            // Loop melalui data hasil query
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                    <td>' . $row["id_pesan"] . '</td>
                    <td>' . $row["nama"] . '</td>
                    <td>' . $row["alamat"] . '</td>
                    <td>' . $row["no_wa"] . '</td>
                    <td>' . $row["paket_pesanan"] . '</td>
                </tr>';
            }
            echo '
                        </tbody>
                    </table>
                </div>
            </div>';
        } else {
            echo '<div class="alert alert-warning" role="alert">0 hasil</div>';
        }

        // Menutup koneksi
        $conn->close();
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>