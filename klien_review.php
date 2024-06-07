<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tugas VSGA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="stlye.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <style>
        .client-logo {
            height: 100px;
            object-fit: contain;
            filter: grayscale(100%);
            transition: filter 0.3s;
        }

        .client-logo:hover {
            filter: none;
        }

        .review-card {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .review-text {
            font-style: italic;
        }

        .review-author {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
   
</head>

<body>
    <div class="container mt-5 mb-10">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top mb-10">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="data:image/jpeg;base64,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" alt="" width="120" height="96" class="btn rounded-circle " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" />
                </a>
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#carousel">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#produk_kami">Produk Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">Kontak Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about_us">About Us</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  >Dropdown link</a
                >
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li> -->
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Side bar -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Solina</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galeri.php">Galeri Foto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="klien_kami.php">Klien Kami</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown mt-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Login
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sign Up</a></li>
                        <li><a class="dropdown-item" href="./admin/input_pesanan.php">Sign in</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- main content -->
<!-- Daftar Klien -->
 <div class="container mt-5">
<div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Klien</h2>
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4">
                <img src="data:image/jpeg;base64,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" alt="Client 1" class="client-logo img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="data:image/jpeg;base64,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" alt="Client 2" class="client-logo img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIDbaqt7GNxAFHoDMrvw45mk8lIlQA8KxXiD7q4AUUTkbtyyKkBBzUmmembaWeAVOWPZk&usqp=CAU" alt="Client 3" class="client-logo img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="https://www.shutterstock.com/shutterstock/videos/1098691507/thumb/1.jpg?ip=x480" alt="Client 4" class="client-logo img-fluid">
            </div>
        </div>
    </div>

    <!-- Review Customer -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Review dari Customer</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="review-card">
                    <p class="review-text">"Layanan yang sangat memuaskan, cepat dan profesional. Saya sangat merekomendasikan!"</p>
                    <p class="review-author">- John Doe</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review-card">
                    <p class="review-text">"Pengalaman yang luar biasa dari awal sampai akhir. Tim sangat membantu dan ramah."</p>
                    <p class="review-author">- Jane Smith</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="review-card">
                    <p class="review-text">"Hasil yang sangat memuaskan dengan harga yang terjangkau. Pasti akan menggunakan layanan ini lagi."</p>
                    <p class="review-author">- David Lee</p>
                </div>
            </div>
        </div>
    </div>
    </div>




        
    </main>


    <footer class=" py-2 text-center">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h5>Alamat Kami</h5>
                <p>Jalan Wates KM. 2</p>
                <p>Kota Yogyakarta, Provinsi D.I. Yogyakarta, 83123</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5>Kontak Kami</h5>
                <p>Email: info@solina.com</p>
                <p>Telepon: 123-456-7890</p>
                <p>WhatsApp: 098-765-4321</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <h5>Ikuti Kami</h5>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>
            </div>
        </div>
        </div>
        <div class="container-fluid " style="background: linear-gradient(to left, #0176ff, #00b7ff);">
            <p class="mb-0">Hak Cipta &copy; 2024 Solina. Semua Hak Dilindungi.</p>
        </div>
    </footer>



    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>