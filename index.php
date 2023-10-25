<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIMASISFO</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
</head>

<body style="background-color: #3533CD; color:white;font-family: 'Bungee', sans-serif;">

  <div class="container-fluid">
    <!--HEADER-->
    <div class="row row-cols-1 row-cols-md-2 justify-content-center" style="background-color:#3533CD;margin: 0px; padding:0px;">
      <!--FOTO-->
      <div class="col" style="margin: 0px; padding:0em;">
        <center>
          <img src="assets/Headers.png" style="width: 100%; ">
        </center>
      </div>
    </div>
    <!--LOGO-->
    <center>
      <hr style="margin: 0; width:100%;  border-top: 2px solid black;">
    </center>
    <div class="row row-cols-1 row-cols-md-1 justify-content-center" style="background-color:#3533CD;margin: 0px; padding:0px;">
      <center>

        <div class="col p-3">
          <a href="https://instagram.com/himasisfoupnvyk">
            <button class="mx-4" type="button" style=" background: url('assets/ig.png') no-repeat; background-size: cover; width: 2em; height: 2em; padding:0px; border:none;"></button>
          </a>
          <a href="https://spotify.link/3MqI0VAAWDb">
            <button class="mx-4" type="button" style=" background: url('assets/spotifys.png') no-repeat; background-size: cover; width: 2em; height: 2em; padding:0px; border:none;"></button>
          </a>
          <a href="https://www.linkedin.com/company/himasisfoupnvyk/">
            <button class="mx-4" type="button" style=" background: url('assets/linkedins.png') no-repeat; background-size: cover; width: 2em; height: 2em; padding:0px; border:none;"></button>
          </a>
        </div>
    </div>
    </center> 
  </div>

  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary border border-2">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto py-3">

          <!--MENU BERITA-->
          <li class="nav-item mx-4">
            <a class="nav-link" href="#berita">BERITA</a>
          </li>

          <!--MENU PROFIL-->
          <li class="nav-item dropdown mx-4">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PROFIL
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#struktur">Struktur Organisasi</a></li>
              <li><a class="dropdown-item" href="#logokabinet">Arti Logo Kabinet</a></li>
            </ul>
          </li>

          <!--MENU DAFTAR DEPARTEMEN-->
          <li class="nav-item dropdown mx-4">
            <a class="nav-link" href="#daftardept">
              DAFTAR DEPARTEMEN
            </a>
          </li>

          <!--MENU SI PERPUS-->
          <li class="nav-item mx-4">
            <a class="nav-link" href="perpus.php">SI PERPUS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--HOMEPAGE-->
  <!--text homepage-->
  <div class="container-fluid mx-0 px-0">

    <div class="justify-content-center image-container" style="box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.5); background-image: url('assets/HomePhotos.jpg'); background-size:100%; display:flex; justify-content: center; align-items: center; text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.9);">
      <center>
        <p class="h1" style="color: #fff;text-align: center;font-family: 'Poppins', sans-serif; margin-top:7em;">Kabinet Ekspansi Visi</p>
        <p class="lead fonts" style="color: #fff;text-align: center;font-family: 'Poppins', sans-serif;">Kata “Ekspansi” diambil dari arti perluasan, pengembangan, peningkatan. Kata
        “Visi” diambil dari arti pandangan masa depan, ambisi besar, dan cita-cita besar. Nama Kabinet “Ekspansi Visi” bermakna bahwa HIMASISFO mampu untuk
        mencapai visi yang lebih besar dan lebih inklusif dengan menyalakan asa dari
        Mahasiswa Sistem Informasi yang memiliki hak untuk bersinar, bersama berjalan
        beriringan mensinergikan langkah sampai teraktualisasikannya cita. Nama
        Kabinet ini juga sebagai doa bahwa adanya HIMASISFO semoga mampu
        memberikan kekuatan dan kemaslahatan yang jauh lebih besar.</p>
        <a href="#daftardept"><button type="button" class="btn btn-warning rounded rounded-5" style="margin-bottom:13em;margin-top:2em; box-shadow: 0 0 10px rgba(255, 193, 7, 0.7);">GET TO KNOW US!</button></a>
      </center>
    </div>
  </div>

  <!--Bintang-->
  <img src="assets/back.png" style="position: absolute; left:15%;right:20%;" width="60%">


  <!--MENU BERITA-->
  <div class="container" style="margin-top: 4em;" id="berita">
    <center>

      <h1 class="text-warning" style="text-shadow: 0 0 10px rgba(255, 193, 7, 0.7);">All Posts</h1>

      <!--BARIS CARD-->
      <div class="row row-cols-1 row-cols-ms-4 ">

        <!--CARD 1-->
        <div class="col p-3 col-sm">
          <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h5 class="card-title">Informasi Beasiswa</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary" style="font-family: 'Poppins', sans-serif;">Informasi Beasiswa MSIB</h6>
              <p class="card-text" style="font-family: 'Poppins', sans-serif;">Program MSIB 6 telah dibuka lho!
Ayo jadi bagian dari MSIB Angkatan 6 dan tingkatkan kariermu ke level yang lebih tinggi!</p>
              <a href="https://www.instagram.com/p/CylNPYgyWf1/" class="card-link" style="font-family: 'Poppins', sans-serif;">Read More</a>
            </div>
          </div>
        </div>

        <!--CARD 2-->
        <div class="col p-3 col-sm">
          <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h5 class="card-title">Informasi Beasiswa</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary" style="font-family: 'Poppins', sans-serif;">Edisi Oktober 2023</h6>
              <p class="card-text" style="font-family: 'Poppins', sans-serif;">Halo, Sobat Sisfo!
Reminder untuk seluruh scholarship hunter, jangan lupa disimak Info Beasiswa Bulan OKTOBER 2023 nih!
Jangan lupa daftar ya!!</p>
              <a href="https://www.instagram.com/p/Cx2iZorhlEp/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==" class="card-link" style="font-family: 'Poppins', sans-serif;">Read More</a>
            </div>
          </div>
        </div>

        <!--CARD 3-->
        <div class="col p-3 col-sm">
          <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary" style="font-family: 'Poppins', sans-serif;">Card subtitle</h6>
              <p class="card-text" style="font-family: 'Poppins', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link" style="font-family: 'Poppins', sans-serif;">Read More</a>
            </div>
          </div>
        </div>

        <!--CARD 4-->
        <div class="col p-3 col-sm">
          <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary" style="font-family: 'Poppins', sans-serif;">Card subtitle</h6>
              <p class="card-text" style="font-family: 'Poppins', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link" style="font-family: 'Poppins', sans-serif;">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-4">

        <!--CARD 5-->
        <div class="col p-3 col-sm ">
          <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary" style="font-family: 'Poppins', sans-serif;">Card subtitle</h6>
              <p class="card-text" style="font-family: 'Poppins', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link" style="font-family: 'Poppins', sans-serif;">Read More</a>
            </div>
          </div>
        </div>

        <!--CARD 6-->
        <div class="col p-3 col-sm">
          <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary" style="font-family: 'Poppins', sans-serif;">Card subtitle</h6>
              <p class="card-text" style="font-family: 'Poppins', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link" style="font-family: 'Poppins', sans-serif;">Read More</a>
            </div>
          </div>
        </div>

        <!--CARD 7-->
        <div class="col p-3 col-sm">
          <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary" style="font-family: 'Poppins', sans-serif;">Card subtitle</h6>
              <p class="card-text" style="font-family: 'Poppins', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link" style="font-family: 'Poppins', sans-serif;">Read More</a>
            </div>
          </div>
        </div>

        <!--CARD 8-->
        <div class="col p-3 col-sm">
          <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107; box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary" style="font-family: 'Poppins', sans-serif;">Card subtitle</h6>
              <p class="card-text" style="font-family: 'Poppins', sans-serif;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link" style="font-family: 'Poppins', sans-serif;">Read More</a>
            </div>
          </div>
        </div>
      </div>

    </center>
  </div>

  <!--Gambar Struktur Organisasi-->

  <center>
    <h1 style="margin-top: 4em;text-shadow: 0 0 10px rgba(255, 193, 7, 0.7);" class="text-warning" id="struktur">Mading Struktur Organisasi</h1>
  </center>
  <img src="strukturorg.png" width="100%" class="mx-0 rounded rounded-3" style="margin-top: 2em;">

  <!-- Arti Logo Kabinet -->
  <center>
    <h1 style="text-shadow: 0 0 10px rgba(255, 193, 7, 0.7);" class="text-warning" id="logokabinet"><br>Arti logo kabinet<br></h1>
  </center>
  <div class="container-fluid mx-0 p-4 ">
    <div class="row row-cols-1 row-cols-md-12 p-4 justify-content-center">
      <div class="col-sm-3 p-4">
        <center>
          <img src="assets/kabinet.png" class="card-img-top" style="width: 100%;">
        </center>
      </div>
      <div class="col-sm-8 p-4" style="font-family: 'Poppins', sans-serif; font-size:18px; padding-left:2em;">
        <h2>Filosofi</h2>
        <ul>
          <li>
            Huruf E/3 helai sayap burung melambangkan kabinet Ekspansi Visi yang terdiri dari 3 komponen di dalamnya yaitu departemen, BPH, dan PMO.
          </li>
          <li>
            Api melambangkan kekuatan, energi, dan antusiasme yang ada di HIMASISFO. Api menjadi simbol semangat dan harapan baru yang memotivasi HIMASISFO dalam memulai dan terus melakukan sesuatu hingga tujuan tercapai.
          </li>
          <li>
            Burung yang mengepakkan sayap: Sayap burung yang bersatu mengilustrasikan kekuatan yang timbul dari kerjasama, di mana pengurus HIMASISFO menciptakan kerjasama yang bersinergi dan berharmoni untuk mencapai tujuan yang lebih besar. Burung dalam logo dapat digambarkan dalam posisi atau bentuk yang fleksibel dengan sayap yang dapat melengkung. Hal ini mencerminkan kemampuan HIMASISFO untuk beradaptasi dengan lingkungan yang berubah dan mencari solusi kreatif dalam menghadapi tantangan.
          </li>
          <li>
            Manusia dengan tangan menjalar ke atas melambangkan HIMASISFO yang bersifat humanis, yaitu memiliki rasa solidaritas dan kepedulian terhadap sesama. Hal ini menggambarkan harapan akan kesetaraan hak dan perlakuan bagi seluruh mahasiswa sistem informasi.
          </li>
          <li>
            Kombinasi warna merah dan orange menggambarkan semangat, keberanian, optimisme, serta komitmen HIMASISFO untuk terus berkembang.
          </li>
        </ul>
      </div>
    </div>
  </div>

    <!--Daftar Departemen-->
    <div class="container" style="margin-top: 5em; margin-bottom: 10em;" id="daftardept">
      <center>
        <!--Komputer-->
        <img src="assets/komputer.gif" style="position: absolute; right:0; top:1;" width="10%">
        <h1 style="text-shadow: 0 0 10px rgba(255, 193, 7, 0.7);" class="text-warning">Daftar Departemen</h1>

        <!--Baris Atas-->
        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
          <div class="col p-3 col-sm">
            <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5)">
              <img src="assets/bph/bph.png" class="card-img-top rounded rounded-4 p-1" alt="...">
              <div class="card-body ">
                <h5 class="card-title">Badan Pengurus Harian</h5>
                <a href="dept/BPH.php" class="btn btn-dark text-warning">BPH</a>
              </div>
            </div>
          </div>

          <div class="col p-3 col-sm ">
            <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5)">
              <img src="assets/pmo.png" class="card-img-top rounded rounded-4 p-1" alt="...">
              <div class="card-body ">
                <h5 class="card-title">Pengawas Mutu Organisasi</h5>
                <a href="dept/PMO.php" class="btn btn-dark text-warning">PMO</a>
              </div>
            </div>
          </div>

          <div class="col p-3 col-sm ">
            <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5)">
              <img src="assets/humriat.png" class="card-img-top rounded rounded-4 p-1" alt="...">
              <div class="card-body ">
                <h5 class="card-title">HUMAS dan Kesekretariatan</h5>
                <a href="dept/HUMRIAT.php" class="btn btn-dark text-warning">humriat</a>
              </div>
            </div>
          </div>
        </div>
        <!--Baris Tengah-->
        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
          <div class="col p-3 col-sm ">
            <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5)">
              <img src="assets/mikat.png" class="card-img-top rounded rounded-4 p-1" alt="...">
              <div class="card-body ">
                <h5 class="card-title">Minat dan bakat </h5> <br>
                <a href="dept/MIKAT.php" class="btn btn-dark text-warning">mikat</a>
              </div>
            </div>
          </div>

          <div class="col p-3 col-sm ">
            <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5)">
              <img src="assets/ekraf.png" class="card-img-top rounded rounded-4 p-1" alt="...">
              <div class="card-body ">
                <h5 class="card-title">ekonomi kreatif</h5> <br>
                <a href="dept/EKRAF.php" class="btn btn-dark text-warning">ekraf</a>
              </div>
            </div>
          </div>

          <div class="col p-3 col-sm ">
            <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5)">
              <img src="assets/sosmas.png" class="card-img-top rounded rounded-4 p-1" alt="...">
              <div class="card-body ">
                <h5 class="card-title">sosial masyarakat </h5> <br>
                <a href="dept/SOSMAS.php" class="btn btn-dark text-warning">sosmas</a>
              </div>
            </div>
          </div>
        </div>
        <!--Baris Bawah-->
        <div class="row row-cols-1 row-cols-md-3 justify-content-center">
          <div class="col p-3 col-sm ">
            <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5)">
              <img src="assets/advokesma.png" class="card-img-top rounded rounded-4 p-1" alt="...">
              <div class="card-body ">
                <h5 class="card-title">advokasi dan kesejahteraan mahasiswa</h5>
                <a href="dept/ADVO.php" class="btn btn-dark text-warning">advokesma</a>
              </div>
            </div>
          </div>

          <div class="col p-3 col-sm ">
            <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5)">
              <img src="assets/akpro.png" class="card-img-top rounded rounded-4 p-1" alt="...">
              <div class="card-body ">
                <h5 class="card-title">akademi dan keprofesian</h5><br>
                <a href="dept/AKPRO.php" class="btn btn-dark text-warning">akpro</a>
              </div>
            </div>
          </div>

          <div class="col p-3 col-sm ">
            <div class="card rounded rounded-4" style="width: 18rem; background-color:#ffc107;box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5)">
              <img src="assets/medkom.png" class="card-img-top rounded rounded-4 p-1" alt="...">
              <div class="card-body ">
                <h5 class="card-title">media komunikasi dan informasi</h5><br>
                <a href="dept/MEDKOM.php" class="btn btn-dark text-warning">medkominfo</a>
              </div>
            </div>
          </div>
      </center>
    </div>

    <!--FOOTER-->
    <footer style="  position: static;background-color: #191919;color: black;padding: 2em;">
      <p class="text-light" style="margin: 0px; font-size:20px;">©Copyrights</p>
      <p class="text-light" style="margin: 0px; font-size:12px;">All Right Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>