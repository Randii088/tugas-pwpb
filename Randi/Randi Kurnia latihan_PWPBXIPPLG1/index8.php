<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style8.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>
  <div id="header">
    <!-- awal navbar -->
    <nav class="navbar navbar-auto navbar-expand-lg bg-danger navbar-dark " data-bs-theme="light">
      <div class="container-fluid">
        <nav class="navbar ">
          <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
              <img src="img/mu1.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top ">
              Manchester United
            </a>
          </div>
        </nav>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#content">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#berita mb-4 ">Berita</a>
            </li>
            <li>
              <form class="d-flex" role="search">
                <button type="button" class="btn btn-outline-light me-4" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  Login
                </button>
              </form>
            </li>

          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
  </div>
  <div id="content">
    <!--awal carousel-->
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="carousel-gmb" src="img/foto.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img class="carousel-gmb"
            src="img/manchester-united-juara-fa-cup-usai-taklukkan-manc-800-2024-05-26-005525_0.jpg"
            class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img class="carousel-gmb" src="img/squad mu.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--akhir carousel-->





    <!--awal berita-->
    <div id="berita mb-4">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Berita</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="card">
            <img src="img/manuel.jpg" class="card-img-top-saf" alt="f1">
            <div class="card-body">
              <p class="card-text"><b>Manuel Ugarte</b> <br>Pemain yang didatangkan pada transfer musim ini</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="img/saf.jpeg" class="card-img-top-saf" alt="f2">
            <div class="card-body">
              <p class="card-text"><b>Sir Alex Ferguson </b><br>pelatih legend yang tidak bisa ditandingi oleh oleh
                pelatih pelatih mu yang telah melatih</p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="img/ls.jpeg" class="card-img-top-saf" alt="3">
            <div class="card-body">
              <p class="card-text"><b>Luke Shaw</b><br>Pemain yang cedera dan tidak diketahui kapan akan menjalani debut
                musim 2024/2025</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#dc3545" fill-opacity="1"
        d="M0,128L40,144C80,160,160,192,240,213.3C320,235,400,245,480,261.3C560,277,640,299,720,298.7C800,299,880,277,960,245.3C1040,213,1120,171,1200,160C1280,149,1360,171,1400,181.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
      </path>
    </svg>
    <!--akhir berita-->

  </div>
  <section class="about">
    <div class="row text-center">
      <h2>About Us</h2>
    </div>
    <div class="row text-center">
      <div class="col">Website resmi Manchester United merupakan platform utama bagi para penggemar untuk mendapatkan
        informasi terkini tentang klub sepak bola legendaris ini. Di dalamnya, pengunjung dapat menemukan berita terbaru
        mengenai tim, jadwal pertandingan, dan hasil laga. Selain itu, website ini juga menawarkan konten eksklusif,
        seperti wawancara pemain, analisis pertandingan, dan sejarah klub yang kaya. Desain yang user-friendly
        memudahkan pengunjung untuk menjelajahi berbagai fitur, termasuk toko resmi yang menjual merchandise dan tiket
        pertandingan. Dengan interaksi yang kuat melalui media sosial, situs ini menjadi jembatan antara klub dan jutaan
        penggemarnya di seluruh dunia.</div>

    </div>
  </section>


  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#dc3545" fill-opacity="1"
      d="M0,224L40,213.3C80,203,160,181,240,186.7C320,192,400,224,480,234.7C560,245,640,235,720,197.3C800,160,880,96,960,96C1040,96,1120,160,1200,181.3C1280,203,1360,181,1400,170.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
    </path>
  </svg>

  <!--akhir login -->
  <!--awal modal bocks -->
  <!--akhir modal bocks -->
  <!--awal footer -->
  <section>
    <footer class="bg-danger">
      <p class="text-white text-center">Created by <a
          href="https://www.instagram.com/randi_kurnia14?igsh=MXVxbHBpaGhwM3N0ZQ== " class="text-white">Randi Kurnia <i
            class="fab fa-instagram"></i></a>
      </p>


    </footer>
  </section>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <section id="login mb-2 ">
            <div class="container">
              <div class="row text-center mb-3 mt-5">
                <div class="col">
                  <h2 class="text-white">Login</h2>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <form method="POST" action="aksi_login.php">
                    <div class="mb-3">
                      <label for="Username" class="form-label text-white">Username</label>
                      <input type="text" class="form-control" id="username" aria-describedby="email" name="user">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                      <button type="submit" class="btn btn-danger mt-2">Kirim</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!--akhir footer -->
        <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>