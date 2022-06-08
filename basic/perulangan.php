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
                        <a class="nav-link active" aria-current="page" href="index.php">Basic</a>
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
                    <h2 class="display-7 fx-bold text-warning">Perulangan</h2>
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

        <!-- Content -->
        <section>
            <div class="container">
                <div class="article mt-5">
                    <h1 class="text-center">Dasar Perulangan</h1>
                    <br>
                    <h4>Perulangan For</h4>
                    <p>Pada python, kita bisa melakukan perulangan dengan beberapa cara di antaranya:</p>
                    <p>•	Perulangan for <br>
                        •	Perulangan while <br>
                        •	Fungsi rekursif
                    </p>
                    <p>Perulangan for pada python adalah perintah yang digunakan untuk melakukan iterasi dari sebuah nilai sequence atau data koleksi pada python seperti List, Tuple, String dan lain-lain.
                        <br>
                        For pada python memiliki perilaku yang berbeda dengan for pada kebanyakan bahasa pemrograman yang lain, karena pada python ia sangat berkaitan dengan data sequence atau data kolektif. Mungkin kalau dibandingkan dengan bahasa lain, for pada python lebih dikenal sebagai foreach.
                    </p>
                    <h5 class="text-start">Syntax For</h5>
                    <p>Berikut ini adalah struktur sintaks metode for:</p>
                </div>
                <div class="card">
                    <div class="card-header">
                        Source Code
                    </div>
                    <div class="card-body">
                        <code>
                            <p class="my-0">for nilai in sequence:</p>
                            <p class="ms-4 my-0">  # blok kode for</p>
                        </code>
                    </div>
                </div>
                <div class="article mt-5">
                    <p>Jadi, ada 3 bagian penting : <br>
                        - Sequence: adalah sebuah nilai yang bersifat iterable alias bisa diulang-ulang. <br>
                        Di antara tipe data yang bersifat sequence atau iterable adalah: <br>
                        •	list <br>
                        •	tuple <br>
                        •	string <br>
                        •	dan lain sebagainya <br>
                        - nilai: adalah setiap item yang diekstrak dari sequence <br>
                        - Blok kode: yaitu statemen-statemen atau perintah-perintah tertentu yang akan dieksekusi secara berulang.
                    </p>
                </div>
                <div class="article mt-5">
                    <h3>Perulangan While</h3>
                    <p>Perulangan while pada python adalah proses pengulangan suatu blok kode program selama sebuah kondisi terpenuhi.
                        <br>Singkatnya, perulangan while adalah perulangan yang bersifat indefinite alias tidak pasti, atau bahkan tidak terbatas.
                        Sebuah blok kode akan dilakukan terus-menerus selama suatu kondisi terpenuhi. Jika suatu kondisi ternyata tidak terpenuhi pada iterasi ke 10, maka perulangan akan berhenti. Jika kondisi yang sama pada saat yang berbeda ternyata berhenti pada iterasi ke 100, maka perulangan akan berhenti pada jumlah tersebut.
                        </p>
                    <h5 class="text-start">Syntax While</h5>
                    <p>Berikut ini adalah struktur sintaks metode while:</p>
                </div>
                <div class="card">
                    <div class="card-header">
                        Struktur
                    </div>
                    <div class="card-body">
                        <code>
                            <p class="ms-4 my-0">while <kondisi>: </p>
                            <p class="ms-4 my-0"> # blok kode yang akan diulang-ulang</p>                    
                        </code>
                    </div>
                </div>
                <div class="article mt-5">
                    <h5 class="text-start">Break dan continue</h5>
                    <p>Pada python, kita bisa menginterupsi dan juga men-skip suatu iterasi pada perulangan. <br>
                        Terdapat 2 perintah yang bisa kita gunakan, yaitu: <br>
                        •	break untuk interupsi (memberhentikan paksa) sebuah perulangan <br>
                        •	continue untuk menskip ke iterasi selanjutnya</p>
                    <p>Lets try it!</p>
                </div>
                <div class="article mt-5">
                    <h5 class="text-start">Kapan harus menggunakan for, dan kapan harus menggunakan while?</h5>
                    <p>Sebenarnya tidak ada acuan yang sangat baku, karena banyak sekali kasus-kasus yang bisa diselesaikan dengan menggunakan keduanya.
                    <br> Tapi, kalau memang ingin sebuah jawaban </p>
                </div>

                <!-- Page navigation -->
                <nav aria-label="Page navigation" class="mt-5">
                    <ul class="pagination">
                        <div class="col-md-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Materi sebelumnya">
                            <li class="page-item text-center active">
                                <a class="page-link" href="percabangan.php" aria-label="Previous">
                                  <span aria-hidden="true">&laquo; Percabangan</span>
                                </a>
                              </li>
                        </div>
                        <div class="col-md-8"></div>
                        <div class="col-md-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Materi selanjutnya">
                            <li class="page-item text-center active">
                                <a class="page-link" href="fungsi.php" aria-label="Next">
                                    <span aria-hidden="true">Fungsi &raquo;</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                  </nav>
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
                <form action="perulangan.php" method="post" name="langganan">
                    <div class="row justify-content-center">
                        <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="mb-3 pt-5 mx-5">
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="emailmu@sebuahemail.com"/>
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
                <p>Made with <span style="color: #e25555;">&#9829;</span> by PyLearn</p>
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
    --></body>
</html>

<?php
// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $email = $_POST['email'];
    
    // include database connection file
    include_once("../config.php");
            
    // Insert user data into table
    $db = new Database();

    $db->save($email);
    //$result = mysqli_query($mysqli, "INSERT INTO latihan(id,email) VALUES('','$email')");
    ?>
    <!-- Show message when user added -->
    <script type="text/javascript">
        alert("Terima Kasih Telah Berlangganan!");
    </script>
    <?php
}
?>