<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="stlye.css" />
    <title>Pesanan</title>
</head>

<body>

    <div class="container mt-3">
        <div class="card">
            <form class="p-4" action="proses_pesanan.php" method="POST">
                <div class="row mb-3">
                    <label for="id_pesan" class="col-sm-2 col-form-label">No Order</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_pesan" name="id_pesan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="alamat" name="alamat" rows="5"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_wa" class="col-sm-2 col-form-label">No WA/Telp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_wa" name="no_wa">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="paketpesanan" class="col-sm-2 col-form-label">Paket Pesanan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="paket_pesanan" name="paket_pesanan">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>