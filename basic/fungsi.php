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
                    <h2 class="display-7 fx-bold text-warning">Fungsi</h2>
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
            <h2 class="display-6 fw-bold text-center mb-5">Fungsi</h2>
            <br>
                <div class="article mt-5">
                    <h5 class="text-start">Dasar Fungsi</h5>
                    <p>Fungsi pada python adalah kumpulan perintah atau baris kode yang dikelompokkan menjadi satu kesatuan untuk kemudian bisa dipanggil atau digunakan berkali-kali.
                        <br> Sebuah fungsi bisa menerima parameter, bisa mengembalikan suatu nilai, dan bisa dipanggil berkali-kali secara independen.
                        <br> Dengan fungsi kita bisa memecah program besar yang kita tulis, menjadi bagian-bagian kecil dengan tugasnya masing-masing.
                        <br>Juga, fungsi akan membuat kode program kita menjadi lebih “reusable” dan lebih terstruktur.</p>
                    <h5 class="text-start">SINTAKS FUNGSI</h5>
                    <p>Di dalam python, sintaks pembuatan fungsi terlihat seperti berikut:</p>
                </div>
                <div class="card">
                    <div class="card-header">
                        Struktur
                    </div>
                    <div class="card-body">
                      <code>
                          <p class="my-0">def <nama_fungsi>(parameters):</p>
                          <p class="ms-4 my-0">statements</p>
                      </code>
                    </div>
                </div>
                <div class="article mt-5">
                    <p>Sintaks di atas secara umum terbagi menjadi 4 bagian: <br>
                        1.	Kata kunci def yang menjadi pertanda bahwa blok kode program adalah sebuah fungsi <br>
                        2.	Nama fungsi yang kita buat <br>
                        3.	Parameters yang akan diterima oleh fungsi yang kita buat (tidak wajib) <br>
                        4.	Dan blok kode fungsi yang di sana akan kita tulis perintah-perintah yang harus dilakukan oleh sebuah fungsi</p>
                    <h5 class="text-start">Contoh sebuah fungsi sederhana dengan nama halo_dunia():</h5>
                    <div class="card">
                        <div class="card-header">
                            Source Code
                        </div>
                        <div class="card-body">
                          <code>
                              <p class="my-0">def halo_dunia():</p>
                              <p class="ms-4 my-0">print('Halo python! Halo dunia!')</p>
                          </code>
                        </div>
                    </div>
                    <div class="article mt-5">
                        <h5 class="text-start">MEMANGGIL FUNGSI</h5>
                        <p>Bagaimana cara memanggil fungsi yang telah kita definisikan? <br>
                            Sederhana. <br>
                            Cukup ketik nama fungsinya, ditambah dengan tanda kurung () seperti berikut:
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Source Code
                        </div>
                        <div class="card-body">
                          <code>
                              <p class="my-0">halo_dunia()<nama_fungsi>(parameters):</p>
                          </code>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Hasil
                        </div>
                        <div class="card-body">
                          <code>
                              <p class="my-0">Halo python! Halo dunia<nama_fungsi>(parameters):</p>
                          </code>
                        </div>
                    </div>

                    <div class="article mt-5">
                        <h5 class="text-start">FUNGSI DENGAN ARGUMEN ATAU PARAMETER</h5>
                        <p>Sebuah fungsi juga bisa menerima parameter atau pun argumen. Ia merupakan suatu nilai/variabel yang dilemparkan ke dalam fungsi untuk diproses lebih lanjut.</p>
                    
                        <div class="card">
                            <div class="card-header">
                                Source Code
                            </div>
                            <div class="card-body">
                            <code>
                                <p class="my-0">print('Halo Nurul, selamat datang!')</p>
                                <p class="my-0">print('Halo Lendis, selamat datang!')</p>
                                <p class="my-0">print('Halo Fabri, selamat datang!')</p>
                                <p class="my-0">print('Halo Isa, selamat datang!')</p>
                            </code>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                Hasil
                            </div>
                            <div class="card-body">
                            <code>
                                <p class="my-0">Halo Nurul, selamat datang!</p>
                                <p class="my-0">Halo Lendis, selamat datang!</p>
                                <p class="my-0">Halo Fabri, selamat datang!</p>
                                <p class="my-0">Halo Isa, selamat datang!</p>
                            </code>
                            </div>
                        </div>
                    </div>

                    <div class="article mt-5">
                        <p>Itu adalah cara yang sangat simpel, dan juga tidak salah. Akan tetapi, dari pada kita melakukan 4x print seperti di atas, kita bisa memanfaatkan fungsi dan parameter pada python.Sehingga kode programnya akan terlihat seperti ini:</p>
                        <div class="card">
                            <div class="card-header">
                                Source Code menggunakan fungsi
                            </div>
                            <div class="card-body">
                              <code>
                                <p class="my-0">def selamat_datang (nama):</p>
                                <p class="my-0">print(f'Halo {nama}, selamat datang!')</p>
                                <p class="my-0">selamat_datang('Nurul')</p>
                                <p class="my-0">selamat_datang('Lendis')</p>
                                <p class="my-0">selamat_datang('Fabri')</p>
                                <p class="my-0">selamat_datang('isa')</p>
                              </code>
                            </div>
                        </div>

                        <div class="article mt-5">
                            <h5 class="text-start">PARAMETER</h5>
                            <p>Parameter di dalam python bisa lebih dari satu, bisa wajib semua (harus diisi), dan bisa juga bersifat opsional.
                                <br>Perhatikan contoh fungsi berikut:
                            </p>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Source Code
                            </div>
                            <div class="card-body">
                              <code>
                                  <p class="my-0">def perkenalan (nama, asal):</p>
                                  <p class="my-0">print(f"Perkenalkan saya {nama} dari {asli}")</p>
                              </code>
                            </div>
                        </div>
                        <div class="article mt-5">
                            <p>Jika dipanggil :</p>
                            <div class="card">
                                <div class="card-header">
                                    Memanggil
                                </div>
                                <div class="card-body">
                                    <code>
                                        <p class="my-0">perkenalan("Renza Ilhami", "Jawa Timur")</p>
                                    </code>
                                </div>
                            </div>
                        </div>

                        <div class="article mt-5">
                            <p>Kita akan mendapatkan output:</p>
                            <div class="card">
                                <div class="card-header">
                                    Output
                                </div>
                                <div class="card-body">
                                <code>
                                    <p class="my-0">Perkenalkan saya Renza Ilhami dari Jawa Timur</p>
                                </code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page navigation -->
                <nav aria-label="Page navigation" class="mt-5">
                    <ul class="pagination">
                        <div class="col-md-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Materi sebelumnya">
                            <li class="page-item text-center active">
                                <a class="page-link" href="perulangan.php" aria-label="Previous">
                                  <span aria-hidden="true">&laquo; Perulangan</span>
                                </a>
                              </li>
                        </div>
                        <div class="col-md-8"></div>
                        <div class="col-md-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Menu utama">
                            <li class="page-item text-center active">
                                <a class="page-link" href="index.php" aria-label="Next">
                                    <span aria-hidden="true">Selesai</span>
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
                <form action="fungsi.php" method="post" name="langganan">
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