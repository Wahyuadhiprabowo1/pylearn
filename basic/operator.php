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
                    <h2 class="display-7 fx-bold text-warning">Operator</h2>
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
            <h2 class="display-6 fw-bold text-center mb-5">Operator</h2>
            <br>
                <div class="article mt-5">
                    <h5 class="text-start">Operator Python</h5>
                    <p>Operator adalah konstruksi yang dapat memanipulasi nilai dari operan. </p>
                    <p>Sebagai contoh operasi 3 + 2 = 5. Disini 3 dan 2 adalah operan dan + adalah operator. </p>
                    <p>Bahasa pemrograman Python mendukung berbagai macam operator, diantaranya : </p>
                    <p> •	Operator Aritmatika (Arithmetic Operators)  </p>
                    <p> •	Operator Perbandingan (Comparison (Relational) Operators)  </p>
                    <p> •	Operator Penugasan (Assignment Operators)   </p>
                    <p> •	Operator Logika (Logical Operators)</p>
                    <p> •	Operator Bitwise (Bitwise Operators) </p>
                    <p> •	Operator Keanggotaan (Membership Operators) </p>
                    <p> •	Operator Identitas (Identity Operators) </p>
                    <br>
                    <h5 class="text-start">Operator Aritmatika</h5>
                    <table>
                    <thead>
                        <tr>
                        <th>Operator</th>
                        <th>Contoh</th>
                        <th>Penjelasan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Penjumlahan <code class="language-plaintext highlighter-rouge">+</code></td>
                        <td><code class="language-plaintext highlighter-rouge">1 + 3 = 4</code></td>
                        <td>Menjumlahkan nilai dari masing-masing operan atau bilangan</td>
                        </tr>
                        <tr>
                        <td>Pengurangan <code class="language-plaintext highlighter-rouge">-</code></td>
                        <td><code class="language-plaintext highlighter-rouge">4 - 1 = 3</code></td>
                        <td>Mengurangi nilai operan di sebelah kiri menggunakan operan di sebelah kanan</td>
                        </tr>
                        <tr>
                        <td>Perkalian <code class="language-plaintext highlighter-rouge">*</code></td>
                        <td><code class="language-plaintext highlighter-rouge">2 * 4 = 8</code></td>
                        <td>Mengalikan operan/bilangan</td>
                        </tr>
                        <tr>
                        <td>Pembagian <code class="language-plaintext highlighter-rouge">/</code></td>
                        <td><code class="language-plaintext highlighter-rouge">10 / 5 = 2</code></td>
                        <td>Untuk membagi operan di sebelah kiri menggunakan operan di sebelah kanan</td>
                        </tr>
                        <tr>
                        <td>Sisa Bagi <code class="language-plaintext highlighter-rouge">%</code></td>
                        <td><code class="language-plaintext highlighter-rouge">11 % 2 = 1</code></td>
                        <td>Mendapatkan sisa pembagian dari operan di sebelah kiri operator ketika dibagi oleh operan di sebelah kanan</td>
                        </tr>
                        <tr>
                        <td>Pangkat <code class="language-plaintext highlighter-rouge">**</code></td>
                        <td><code class="language-plaintext highlighter-rouge">8 ** 2 = 64</code></td>
                        <td>Memangkatkan operan disebelah kiri operator dengan operan di sebelah kanan operator</td>
                        </tr>
                        <tr>
                        <td>Pembagian Bulat <code class="language-plaintext highlighter-rouge">//</code></td>
                        <td><code class="language-plaintext highlighter-rouge">10 // 3 = 3</code></td>
                        <td>Sama seperti pembagian. Hanya saja angka dibelakang koma dihilangkan</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="article mt-5">
                    <p>Dibawah ini adalah contoh penggunaan Operator Aritmatika dalam bahasa pemrograman Python</p>
                </div>
                <div class="card">
                    <div class="card-header">
                        Python
                    </div>
                    <div class="card-body">                 
                      <code>
                        <p class="ms-0 my-0">#OPERATOR ARITMATIKA</p>
                        <br>
                          <p class="ms-0 my-0"> #Penjumlahan</p>
                          <p class="ms-0 my-0">print(13 + 2) </p>
                          <p class="ms-0 my-0">apel = 7</p>
                          <p class="ms-0 my-0">jeruk = 9</p>
                          <p class="ms-0 my-0">buah = apel + jeruk #</p>
                          <p class="ms-0 my-0">print(buah)</p>
                          <br>
                          <p class="ms-0 my-0">  #Pengurangan</p>
                          <p class="ms-0 my-0">  hutang = 10000 </p>
                          <p class="ms-0 my-0">  bayar = 5000 </p>
                          <p class="ms-0 my-0">  sisaHutang = hutang - bayar </p>
                          <p class="ms-0 my-0">  print("Sisa hutang Anda adalah ", sisaHutang) </p>
                      </code>
                    </div>
                 </div>

                <!-- Page navigation -->
                <nav aria-label="Page navigation" class="mt-5">
                    <ul class="pagination">
                        <div class="col-md-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Materi sebelumnya">
                            <li class="page-item text-center active">
                                <a class="page-link" href="tipe_data.php" aria-label="Previous">
                                    <span aria-hidden="true">&laquo; Tipe Data</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-8"></div>
                        <div class="col-md-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Materi selanjutnya">
                            <li class="page-item text-center active">
                                <a class="page-link" href="percabangan.php" aria-label="Next">
                                    <span aria-hidden="true">Percabangan &raquo;</span>
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
                <form action="operator.php" method="post" name="langganan">
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

    $db->save($email); //$result = mysqli_query($mysqli, "INSERT INTO latihan(id,email) VALUES('','$email')"); ?>
<!-- Show message when user added -->
<script type="text/javascript">
    alert("Terima Kasih Telah Berlangganan!");
</script>
<?php
}
?>
