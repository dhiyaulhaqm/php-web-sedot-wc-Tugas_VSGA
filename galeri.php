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
        .card-img-top {
            height: 250px; /* Set height sesuai keinginan */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
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
                            <a class="nav-link" href="klien_review.php">Klien Kami</a>
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

    <main class="main-content">

        <!-- <div class="card mb-3 mt-5">
            <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/07/23/245022297.jpeg" class="card-img-top  mx-auto d-block w-75" alt="...">
            <div class="card-body">
                <h5 class="card-title">Gambar 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta laborum aspernatur pariatur corrupti ullam consectetur, eligendi quaerat ea praesentium officia eum, maxime voluptates voluptatibus quia explicabo deleniti, odit placeat harum hic debitis accusantium labore qui! Atque quidem labore optio quos tempora doloremque nostrum iusto quo hic suscipit inventore, ipsam rerum fugit dolore maiores vel similique, eveniet est! Itaque soluta illum, molestiae, aut doloremque ex iste dolorem rem laudantium quibusdam enim nesciunt aliquam accusantium libero qui voluptatum, excepturi alias sunt quasi porro facilis! Id, necessitatibus autem. Vel autem hic est, soluta voluptates, cum harum incidunt rem tenetur nemo dignissimos eligendi adipisci nihil dicta obcaecati mollitia aperiam nulla aliquid culpa in saepe officiis laudantium non. Corporis optio dolores cupiditate laborum aperiam excepturi architecto quibusdam animi voluptate inventore, suscipit placeat exercitationem consequatur harum voluptatem rerum, quisquam totam magnam nobis laudantium quas nesciunt molestiae. Et dolore exercitationem inventore laborum obcaecati deserunt sed iste totam porro, natus esse aperiam eaque omnis laboriosam doloremque sequi voluptatum? Delectus adipisci laudantium aspernatur corrupti nam, cum sit, rem tenetur expedita repellendus, dolore rerum ex animi asperiores temporibus quod numquam magnam ipsum illum et veritatis! Reprehenderit natus laborum reiciendis perspiciatis culpa, similique quos accusantium enim minima saepe suscipit et labore?</p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Gambar 2</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae voluptas vero eius reprehenderit sunt architecto neque, omnis, unde dicta maiores repellat vitae ipsam numquam aspernatur! Facilis porro qui numquam eligendi voluptates, excepturi adipisci itaque hic animi amet maxime fugiat quis. Culpa minima velit maxime qui adipisci dignissimos eos! Veritatis ex voluptatum aliquid ipsam ad, quam consequatur. Pariatur, aliquam ullam suscipit sit at asperiores reiciendis a minima voluptas, itaque, optio ratione dolorem quo eveniet incidunt iure quia reprehenderit eaque vitae unde voluptatibus dicta velit totam? Quisquam porro nam cupiditate minus officia sequi aut quas exercitationem praesentium est, ea earum necessitatibus obcaecati voluptas sint dolores maxime culpa repellat alias! Quo est at doloremque sapiente similique numquam officia quaerat quia beatae rerum, sint, quibusdam ipsa excepturi, sunt iste ab molestias dolorum dolorem et distinctio corporis deserunt itaque. Nesciunt totam perspiciatis asperiores autem temporibus, aliquid ab minima odio itaque pariatur ad recusandae nulla blanditiis ut minus fugiat, possimus velit quidem. Doloremque provident illo eum dolores distinctio tempore delectus perspiciatis error reiciendis accusamus sapiente mollitia ipsum esse, quidem ex molestias vel, amet voluptatum, inventore quaerat laboriosam porro! Cupiditate, illo. Illum, deserunt voluptatem nobis quo aspernatur neque corrupti magnam hic vel exercitationem repellat eligendi ea pariatur.</p>
                <p class="card-text"><small class="text-body-secondary"></small></p>
            </div>
            <img src="https://media.karousell.com/media/photos/products/2024/1/5/sedot_wc_senayan__paling_murah_1704436374_6c731063_progressive" class="card-img-bottom w-75  mx-auto d-block " alt="...">
        </div> -->
<div class="container mt-5" >

<div class="container ">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/07/23/245022297.jpeg" class="card-img-top w-100 mx-auto d-block img-fluid" alt="Sedot Express">
                    <div class="card-body">
                        <h5 class="card-title">Picture</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis non fuga voluptatum aut excepturi voluptatibus veniam, dolores vel amet voluptates tempore eius tempora esse eum, officia sint, doloremque animi odio?
                        </p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://smb-padiumkm-images-public-prod.oss-ap-southeast-5.aliyuncs.com/products/70315/795574/image_picker289.1663072128.jpg" class="card-img-top w-100 mx-auto d-block img-fluid" alt="Sedot Manual">
                    <div class="card-body">
                        <h5 class="card-title">Picture</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est fugiat qui quia alias accusamus impedit facilis, deserunt velit. Deserunt, nobis reiciendis libero unde expedita sed adipisci distinctio est voluptate vitae?
                        </p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



        
        <div class="container ">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVCaGWeCgUhPyZJPizgS6cbFQGrxznSdWMd2DzjF8zFh8BREYNLCTOHQcMaSVcN4spdn4&usqp=CAU " class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quos omnis non adipisci commodi enim ipsum, suscipit ab. Enim molestias saepe corporis eos dolore repellendus ex consequatur eaque, numquam sed?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuPshnmx2p4p9fCwEfdszwfefspzkCJCUWAA&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quos omnis non adipisci commodi enim ipsum, suscipit ab. Enim molestias saepe corporis eos dolore repellendus ex consequatur eaque, numquam sed?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKuS_uh3a6p1vnTPb5FN-vedId5OBStuZn7mMyRyee7P-AES9QmFI-hr9WB4HtpQYsG2Q&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quos omnis non adipisci commodi enim ipsum, suscipit ab. Enim molestias saepe corporis eos dolore repellendus ex consequatur eaque, numquam sed?</p>
                    </div>
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