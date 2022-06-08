<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="../assets/css/style.css" />

        <link rel="icon" type="icon" href="../assets/images/pylearn_icon_fix.png"/>

        <title>PyLearn | Basic</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark mycolor-main fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../index.php">
                    <img src="../assets/images/pylearn_icon_fix.png" alt="PyLearn">
                  </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="../index.php">Home</a>
                        <a class="nav-link active" aria-current="page" href="#">Basic</a>
                        <a class="nav-link" href="../project/index.php">Project</a>
                        <a class="nav-link" href="../event.php">Event</a>
                        <a class="nav-link" href="../about.php">About</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Prolog -->
        <section class="mycolor-main pt-5" id="prolog">
            <div class="text-light px-4 pt-5">
                <div class="container">
                    <h2 class="display-5 fw-bold">Dasar-Dasar Pemrograman Python</h2>
                    <div class="mx-auto">
                        <p class="mb-4">Pahami secara berurutan atau acak, Pelajari sesukamu!</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-start">
                            <a href="#content" class="btn btn-warning btn-lg px-4 gap-3">Mulai belajar</a>
                        </div>
                    </div>
                </div>
            </div>
            <svg id="content" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#ffffff"
                    fill-opacity="1"
                    d="M0,128L34.3,144C68.6,160,137,192,206,186.7C274.3,181,343,139,411,117.3C480,96,549,96,617,112C685.7,128,754,160,823,160C891.4,160,960,128,1029,112C1097.1,96,1166,96,1234,101.3C1302.9,107,1371,117,1406,122.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
                ></path>
            </svg>
        </section>

        <!-- Accordion -->
        <section>
            <div class="container mt-5">
                <div class="text-center">
                    <h3>Dasar-Dasar Pemrograman Python</h3>
                </div>
                <div class="accordion" id="accordionPanelsStayOpenBasic">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingIntro">
                            <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseIntro"
                                aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseIntro"
                            >
                                Intro
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseIntro" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingIntro">
                            <div class="accordion-body">
                                <strong>Python</strong> merupakan salah satu bahasa pemrograman yang sangat populer pada saat ini. Sintaks Python juga mudah dipahami. Selain itu, Python juga menjadi pemeran penting dalam dunia pemrograman saat ini.
                                <div class="d-grid gap-2 d-sm-flex justify-content-sm-end pt-3">
                                    <a href="intro.php" class="btn btn-secondary btn-md px-4">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingVariabel">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseVariabel"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseVariabel"
                            >
                                Variabel
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseVariabel" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingVariabel">
                            <div class="accordion-body">
                                <strong>Variabel</strong> adalah lokasi memori yang dicadangkan untuk menyimpan nilai-nilai. Ini berarti bahwa ketika Anda membuat sebuah variabel Anda memesan beberapa ruang di memori. Variabel menyimpan data yang dilakukan selama program dieksekusi, yang nantinya isi dari variabel tersebut dapat diubah oleh operasi - operasi tertentu pada program yang menggunakan variabel.    
                                <div class="d-grid gap-2 d-sm-flex justify-content-sm-end pt-3">
                                    <a href="variabel.php" class="btn btn-secondary btn-md px-4">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTipeData">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTipeData"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTipeData"
                            >
                                Tipe Data
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTipeData" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTipeData">
                            <div class="accordion-body">
                                <strong>Tipe Data.</strong> adalah suatu media atau memori pada komputer yang digunakan untuk menampung informasi. Python sendiri mempunyai tipe data yang cukup unik bila kita bandingkan dengan bahasa pemrograman yang lain    
                                <div class="d-grid gap-2 d-sm-flex justify-content-sm-end pt-3">
                                    <a href="tipe_data.php" class="btn btn-secondary btn-md px-4">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOperator">
                            <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOperator"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseOperator"
                            >
                                Operator
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOperator" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOperator">
                            <div class="accordion-body">
                                <strong>Operator</strong> adalah konstruksi yang dapat memanipulasi nilai dari operan.    
                                <div class="d-grid gap-2 d-sm-flex justify-content-sm-end pt-3">
                                    <a href="operator.php" class="btn btn-secondary btn-md px-4">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingPercabangan">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapsePercabangan"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapsePercabangan"
                        >
                            Percabangan
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsePercabangan" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingPercabangan">
                        <div class="accordion-body">
                            <strong>Percabangan</strong> dalam dunia pemrograman adalah proses penentuan keputusan atau dalam bahasa inggris ini biasa disebut sebagai conditional statement.
                            <p>Konsepnya sederhana: kita menginstruksikan komputer untuk melakukan suatu aksi tertentu (X), hanya jika suatu kondisi Y terpenuhi. Atau, kita memerintahkan komputer untuk melakukan aksi tertentu (A) jika suatu kondisi tidak terpenuhi.</p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-end pt-3">
                                <a href="percabangan.php" class="btn btn-secondary btn-md px-4">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingPerulangan">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapsePerulangan"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapsePerulangan"
                        >
                            Perulangan
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapsePerulangan" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingPerulangan">
                        <div class="accordion-body">    
                            <strong>Perulangan</strong> dalam bahasa pemrograman berfungsi menyuruh komputer melakukan sesuatu secara berulang-ulang. Terdapat dua jenis perualangan dalam bahasa pemrograman python, yaitu perulangan dengan for dan while.
                            <p>Perulangan for disebut counted loop (perulangan yang terhitung), sementara perulangan while disebut uncounted loop (perulangan yang tak terhitung). Perbedaannya adalah perulangan for biasanya digunakan untuk mengulangi kode yang sudah diketahui banyak perulangannya. Sementara while untuk perulangan yang memiliki syarat dan tidak tentu berapa banyak perulangannya.</p>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-end pt-3">
                                <a href="perulangan.php" class="btn btn-secondary btn-md px-4">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFungsi">
                        <button
                            class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseFungsi"
                            aria-expanded="false"
                            aria-controls="panelsStayOpen-collapseFungsi"
                        >
                            Fungsi
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFungsi" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFungsi">
                        <div class="accordion-body">
                            <strong>Fungsi</strong> pada python adalah kumpulan perintah atau baris kode yang dikelompokkan menjadi satu kesatuan untuk kemudian bisa dipanggil atau digunakan berkali-kali. Sebuah fungsi bisa menerima parameter, bisa mengembalikan suatu nilai, dan bisa dipanggil berkali-kali secara independen. Dengan fungsi kita bisa memecah program besar yang kita tulis, menjadi bagian-bagian kecil dengan tugasnya masing-masing.    
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-end pt-3">
                                <a href="fungsi.php" class="btn btn-secondary btn-md px-4">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#4b8bbe"
                    fill-opacity="1"
                    d="M0,128L34.3,144C68.6,160,137,192,206,186.7C274.3,181,343,139,411,117.3C480,96,549,96,617,112C685.7,128,754,160,823,160C891.4,160,960,128,1029,112C1097.1,96,1166,96,1234,101.3C1302.9,107,1371,117,1406,122.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
                ></path>
            </svg>
        </section>

        <!-- berlangganan -->
        <section class="mycolor-second">
            <div class="container">
                <h2 class="text-center text-light">Pengen dapat notifikasi dari PyLearn? Langganan Sekarang. <strong>GRATIS!</strong></h2>
                <form action="index.php" method="post" name="langganan">
                    <div class="row justify-content-center">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="mb-3 pt-5 mx-5">
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="emailmu@sebuahemail.com" />
                            </div>
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-end mx-5">
                                <button type="submit" name="Submit" class="btn btn-warning">Submit</button>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#ffffff"
                    fill-opacity="1"
                    d="M0,128L34.3,144C68.6,160,137,192,206,186.7C274.3,181,343,139,411,117.3C480,96,549,96,617,112C685.7,128,754,160,823,160C891.4,160,960,128,1029,112C1097.1,96,1166,96,1234,101.3C1302.9,107,1371,117,1406,122.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
                ></path>
            </svg>
        </section>

        <footer>
            <div class="pt-3 text-center">
                <p>Made with <span style="color: #e25555">&#9829;</span> by PyLearn</p>
            </div>
        </footer>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  -->
    </body>
</html>

<?php
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
  $email = $_POST['email'];
  
  // include database connection file
  include_once("../config.php");
          
  // Insert user data into table
  $db = new Database();

  $db->save($email); //$result = mysqli_query($mysqli, "INSERT INTO latihan(id,email) VALUES('','$email')"); ?>
<!-- Show message when user added -->
<script type="text/javascript">
    alert("Terima Kasih Telah Berlangganan!");
</script>
<?php
}
?>
