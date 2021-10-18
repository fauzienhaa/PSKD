<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("location: ../index.php");
    exit;
}

require '../koneksi.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="assets/logo.png" type="image">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <title>SMA HARAPAN JAYA</title>
</head>

<?php
$id = $_GET['id'];
$query = "SELECT * from tbl_user where id = '$id'";
$query_exec = mysqli_query($mysqli, $query);
while ($row = mysqli_fetch_array($query_exec)) :
?>

<body>
<?php include('logout.php') ?>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-short"></i></button>
    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark warna-item shadow">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/sma.png" width="175px" height="50px" data-aos="fade-right" data-aos-duration="1000">
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" data-aos="fade-left" data-aos-duration="2000">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">PROFIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">FASILITAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">BANK SOAL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us">KONTAK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout_user.php" data-toggle="modal" data-target="#logoutModal">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- KONTEN -->
    <div class="wrap">
        <div class="overlay-item">
            <!-- OVERVIEW -->
            <div class="container-fluid" style="padding-top:150px; padding-bottom:100px" id="home">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 me-auto ms-auto">
                        <h1 class="text-white jumbo" data-aos="fade-right" data-aos-duration="2000"
                            style="font-family:'Open Sans'; font-weight:700; text-shadow: 3px 2px #000000">Selamat
                            Datang di Website SMA Harapan Jaya, <br><?php echo $row['nama'] ?></h1>
                        <br>
                        <br>
                        <a href="#about-us"><button data-aos="fade-up" data-aos-duration="1500" type="button"
                                class="btn btn-outline-light" style="font-family:'Raleway'; font-weight:400"><b>Mulai
                                    Sekarang <i class="bi bi-arrow-right"></i></b></button></a>
                    </div>
                </div>
            </div>
            <!-- ABOUT US -->
            <div class="container-fluid putih jarak-atas" id="about-us">
                <div class="row">
                    <div class="container">
                        <div class="col-8 ms-auto me-auto">
                            <h1 class="quote1" data-aos="fade-left" data-aos-duration="2000"
                                style="font-family:'Open Sans'; font-weight:700;"><i class="bi bi-dash-lg"></i><br>
                                VISION
                                <br>& MISSION</h1>

                        </div>
                    </div>
                    <div class="container" data-aos="fade-out" data-aos-duration="2000">
                        <div class="col-8 ms-auto me-auto">
                            <hr>
                            <p class="quote2"
                                style="font-family:'Raleway'; font-size:70px; font-weight:700; text-align:center">VISION
                            </p>
                            <p class="quote2" style="font-family:'Raleway'; font-weight:700; text-align:center">
                                Technology-Based, Excellent in Achievement, Noble in Character and International
                                Insight. </p>
                        </div>
                    </div>
                    <div class="container" data-aos="fade-out" data-aos-duration="2000">
                        <div class="col-8 ms-auto me-auto">
                            <hr>
                            <p class="quote2"
                                style="font-family:'Raleway'; font-size:70px; font-weight:700; text-align:center">
                                MISSION
                            </p>
                            <p class="quote2" style="font-family:'Raleway'; font-weight:700; text-align:center">
                                <ul style="font-family:'Raleway'; font-size:30px; font-weight:700">
                                    <li>Improve academic and non-academic achievements according to the interests,
                                        talents and potential of students. </li>
                                    <li>Develop mastery of information technology, science and technology, and IMTAQ to
                                        improve the quality of education. </li>
                                    <li>Carry out competitive, creative and innovative learning in ICT-based academic
                                        and non-academic fields. </li>
                                    <li>Form a personal discipline, responsible and honest. </li>
                                    <li>Realizing a harmonious and professional working relationship based on the spirit
                                        of brotherhood. </li>
                                    <li>Creating a conducive learning environment in an effort to improve the quality of
                                        learning. </li>
                                    <li>Realizing professional school management. </li>
                                </ul>
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTACT US -->
            <div class="container-fluid jarak" style="background-color:white" id="contact-us">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <h1 class="quote1" data-aos="fade-down" data-aos-duration="2000"
                            style="font-family:'Open Sans'; font-weight:700;"><i class="bi bi-dash-lg"></i><br>Contact
                            Us</h1>
                        <div data-aos="fade-right" data-aos-duration="1500">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" name="pesan" id="pesan" placeholder="Pesan Anda"></textarea>
                            <button type="button" class="btn btn-dark mt-3 float-end">Kirim</button>
                        </div>
                    </div>
                    <div data-aos="fade-out" data-aos-duration="2000" class="col-lg-4 align-self-center">
                        <h3 class="saran" style="font-family:'Raleway'; font-weight:600;">Sampaikan keluhan anda ke kami
                        </h3>
                        <br>
                        <p style="font-family:'Raleway'; font-weight:700">smaharapanj@gmail.com</p>
                        <p style="font-family:'Raleway'; font-weight:700">(0271)666666</p>
                    </div>
                </div>
            </div>
            <!-- FOOTER -->
            <div class="container-fluid" style="padding-top:50px">
                <div class="row justify-content-around">
                    <div class="col-md-3 offset-md-2" style="padding-bottom:50px">
                        <p class="text-white" style="text-align:'center';font-family:'Raleway'; font-weight:400">Follow
                            Us!</p>
                        <a href=" " target="_blank"><i class="bi bi-facebook text-white pe-4"
                                style="font-size:30px"></i></a>
                        <a href=" " target="_blank"><i class="bi bi-instagram text-white pe-4"
                                style="font-size:30px"></i></a>
                        <a href=" " target="_blank"><i class="bi bi-youtube text-white" style="font-size:30px"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('logout.php') ?>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript">
        mybutton = document.getElementById("myBtn");

        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <script type="text/javascript">
        let items = document.querySelectorAll('.carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
    

</body>

<?php endwhile;?>

</html>