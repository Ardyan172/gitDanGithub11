<!doctype html>
<html lang="en" id="home">
<!-- agar ketika navbar ryan di klik di ke home -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap3/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap3/css/style.css">

    <title>My Portfolio</title>
  </head>
  <body>

  <!-- Navbar -->
  <!-- buka di components di bootstrap lalu cari navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <!-- class .navbar-fixed-top agar posisi navbar nya fixed -->
    <!-- class .navbar-inverse agar background-navbarnya menjadi gelap -->
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <!-- button berfungsi membuat tombol garis 3 dan untuk menyimpan link ketika website di buka di browser -->
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="#home" class="navbar-brand halaman-scroll" id="ryan">Ryan</a>
        <!-- kita beri class halaman-scroll untuk JQuery -->
      </div>

      <!-- link -->
      <!-- link posisinya dikanan -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!-- bikin class collapse agar ketika website dibuka di Handphone, semua link akan disimpan di button | lihat baris 26 -->
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about" class="halaman-scroll">About</a></li>
          <!-- ketika about ditekan URL akan buat #about dan akan menjalankan #about -->
          <li><a href="#portfolio" class="halaman-scroll">Portfolio</a></li>
          <!-- kita beri class .halaman-scroll untuk JQuery -->
          <li><a href="#form" class="halaman-scroll">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir navbar -->
    

    <!-- membuat Jumbotron -->
    <div class="jumbotron text-center">
      <!-- class jumbotron bootstrap fungsinya untuk menampilkan informasi atau membuat sebuah kotak besar -->
      <!-- text center merupakan class bootstrap seperti property text-align: center; -->
      <img src="../img/ironman.jpg" alt="ironman" class="image-circle">
      <!-- kalau bootstrap4 menggunakan rounded circle -->
      <h1>Indonesia</h1>
      <p>Negara | Web Developer | Programmer</p>
    </div>
    <!-- akhir Jumbotron -->
 


    <!-- About -->
    <!-- sintaks dibawah menggunakan sistem grid bootstrap -->
    <section class="about" id="about">
    <!-- section sama seperti DIV tetapi section sudah pasti untuk mengelompokkan -->
    <!-- section ini untuk membagi bagi bagian tiap halaman -->
    <!-- id untuk perpindahan a href -->
      <div class="container">
        <!-- sistem grid wajib menggunakan class container -->
        <div class="row">
          <!-- sistem grid juga wajib menggunakan class row -->
          <div class="col-sm-12">
            <!-- didalam sistem grid maksimal 12 colom -->
            <!-- class col jumlah maksimal adalah 12 -->
            <h2 class="text-center">About</h2>
            <hr>
          </div>
        </div>

        <div class="row untukP">
          <!-- sebelum mebuat class col pastikan sudah membuat class row -->
          <div class="col-sm-5 col-sm-offset-1">
            <!-- kita tulis 5 untuk membuat 2 bagian -->
            <!-- fungsi col-sm-offset adalah untuk mengisi/menggeser bagian kosong -->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus asperiores fuga blanditiis sapiente! Aut perspiciatis recusandae, laborum quis accusantium reprehenderit labore veniam! Suscipit qui beatae, doloremque nihil aliquam minima odio.</p>
          </div>
          <div class="col-sm-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo veniam facilis reiciendis repellendus nostrum qui temporibus, nemo corrupti et! Praesentium ex architecto doloribus dolorum libero obcaecati nulla minus inventore fuga!</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->


    <!-- Portfolio -->
    <section class="portfolio text-center" id="portfolio">
    <!-- id untuk perpindahan a href -->
      <!-- kenapa butuh id? -->
      <!-- kita menggunakan id untuk menghubungkan link dinavigasi, ketika link diklik dia pindah ke section -->
      <!-- contoh ketika link di klik, maka di url akan membuat id portfolio dan menjalankan sintaks di dalamnya -->
      <div class="container">
        <!-- sebelum membuat class col wajib membuat class container bootstrap -->
        <div class="row">
          <div class="col-sm-12">
            <h1>Portfolio</h1>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="#foto1" class="thumbnail">
              <!-- ketika gambar diklik URL buat #foto1 dan dia punya class overlay  -->
              <!-- overlay itu background hitam yang transparan -->
              <img src="../img/foto/1.jpg" alt="1">
              <!-- thumbnail untuk class di javascript-->
            </a>

            <div id="foto1" class="overlay">
              <div class="gambar gambar1">
                <a href="#" class="close"></a>
                <a href="#foto6" class="previous"></a>
                <a href="#foto2" class="next"></a>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <a href="#foto2" class="thumbnail">
            <!-- ketika gambar di klik URL akan buat id2 -->
              <img src="../img/foto/2.jpg" alt="2">
              <!-- thumbnail -->
            </a>

            <div id="foto2" class="overlay">
            <!-- id2 punya class overlay -->
              <div class="gambar gambar2">
                <a href="#" class="close"></a>
                <a href="#foto1" class="previous"></a>
                <a href="#foto3" class="next"></a>
              </div>
              <!-- full size -->
            </div>
          </div>
          
          <!-- .. -->
          <div class="col-sm-4">
            <a href="#foto3" class="thumbnail">
              <img src="../img/foto/3.jpg" alt="3">
            </a>

            <div class="overlay" id="foto3">
              <div class="gambar gambar3">
                <a href="#" class="close"></a>
                <a href="#foto2" class="previous"></a>
                <a href="#foto4" class="next"></a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <a href="#foto4" class="thumbnail">
              <img src="../img/foto/4.jpg" alt="">
            </a>

            <div class="overlay" id="foto4">
              <div class="gambar gambar4">
                <a href="#" class="close"></a>
                <a href="#foto3" class="previous"></a>
                <a href="#foto5" class="next"></a>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <a href="#foto5" class="thumbnail">
              <img src="../img/foto/5.jpg" alt="">
            </a>

            <div class="overlay" id="foto5">
              <div class="gambar gambar5">
                <a href="#" class="close"></a>
                <a href="#foto4" class="previous"></a>
                <a href="#foto6" class="next"></a>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <a href="#foto6" class="thumbnail">
              <img src="../img/foto/6.jpg" alt="">
            </a>

            <div class="overlay" id="foto6">
              <div class="gambar gambar6">
                <a href="#" class="close"></a>
                <a href="#foto5" class="previous"></a>
                <a href="#foto1" class="next"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Akhir Portfolio -->


    <!-- Contact -->
    <section class="form" id="form">
    <!-- id untuk perpindahan navigasi a href -->
      <div class="container">
        <!-- judul -->
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Contact</h2>
            <hr>
          </div>
        </div>
        <!-- judul -->

        <div class="row">
          <div class="col-sm-9 col-sm-offset-3">
            <form action="" method="POST" role="form">
              <div class="form-group">
                <div class="name">
                  <label for="name">Name :</label>
                  <input type="text" class="form-control" id="name" autocomplete="off" class="nama1" required>
                  <div class="clear"></div>
                </div>

                <div class="email">
                  <label for="email">Email :</label>
                  <input type="email" class="form-control" id="email" autocomplete="off" required>
                  <div class="clear"></div>
                </div>
                
                <div class="password">
                  <label for="password">password :</label>
                  <input type="password" class="form-control" id="password" autocomplete="off" required>
                  <div class="clear"></div>
                </div>

                <div class="pesan">
                  <label for="pesan">Message</label>
                  <textarea class="form-control" name="pesan" id="pesan" cols="30" rows="10"></textarea>
                </div>

                <div class="pilih">
                  <select class="form-control">
                    <option value="">-- Choose Island --</option>
                    <option value="">Jawa</option>
                    <option value="">Kalimantan</option>
                    <option value="">Papua</option>
                    <option value="">Sumatera</option>
                    <option value="">Sulawesi</option>
                  </select>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary">Enter</button>
            </form>
          </div>

        </div>
      </div>
    </section>
    <!-- akhir contact -->

    
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <p class="text-center">@Copyright 2020 | built by <a href="">Ardyan</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir footer -->

  <!-- javascript -->
  <script type="text/javascript" src="../bootstrap3/js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="../bootstrap3/js/bootstrap.js"></script>
  <script type="text/javascript" src="../bootstrap3/js/script.js"></script>
  </body>
</html>