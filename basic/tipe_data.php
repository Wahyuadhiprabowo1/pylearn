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
                    <h2 class="display-7 fx-bold text-warning">Tipe Data</h2>
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
                <h2 class="display-6 fw-bold text-center mb-5">Tipe Data</h2>
                <br />
                <div class="article mt-5">
                    <h5 class="text-start">Pengertian</h5>
                    <p>Tipe data adalah suatu media atau memori pada komputer yang digunakan untuk menampung informasi. Python sendiri mempunyai tipe data yang cukup unik bila kita bandingkan dengan bahasa pemrograman yang lain.</p>
                    <p>Berikut adalah tipe data dari bahasa pemrograman Python :</p>
                    <table>
                        <thead>
                          <tr>
                            <th>Tipe Data</th>
                            <th>Contoh</th>
                            <th>Penjelasan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Boolean</td>
                            <td><code class="language-plaintext highlighter-rouge">True</code> atau <code class="language-plaintext highlighter-rouge">False</code></td>
                            <td>Menyatakan benar <code class="language-plaintext highlighter-rouge">True</code> yang bernilai <code class="language-plaintext highlighter-rouge">1</code>, atau salah <code class="language-plaintext highlighter-rouge">False</code> yang bernilai <code class="language-plaintext highlighter-rouge">0</code></td>
                          </tr>
                          <tr>
                            <td>String</td>
                            <td><code class="language-plaintext highlighter-rouge">"Ayo belajar Python"</code></td>
                            <td>Menyatakan karakter/kalimat bisa berupa huruf angka, dll (diapit tanda <code class="language-plaintext highlighter-rouge">"</code> atau <code class="language-plaintext highlighter-rouge">'</code>)</td>
                          </tr>
                          <tr>
                            <td>Integer</td>
                            <td><code class="language-plaintext highlighter-rouge">25</code> atau <code class="language-plaintext highlighter-rouge">1209</code></td>
                            <td>Menyatakan bilangan bulat</td>
                          </tr>
                          <tr>
                            <td>Float</td>
                            <td><code class="language-plaintext highlighter-rouge">3.14</code> atau <code class="language-plaintext highlighter-rouge">0.99</code></td>
                            <td>Menyatakan bilangan yang mempunyai koma</td>
                          </tr>
                          <tr>
                            <td>Hexadecimal</td>
                            <td><code class="language-plaintext highlighter-rouge">9a</code> atau <code class="language-plaintext highlighter-rouge">1d3</code></td>
                            <td>Menyatakan bilangan dalam format heksa (bilangan berbasis 16)</td>
                          </tr>
                          <tr>
                            <td>Complex</td>
                            <td><code class="language-plaintext highlighter-rouge">1 + 5j  </code></td>
                            <td>Menyatakan pasangan angka real dan imajiner</td>
                          </tr>
                          <tr>
                            <td>List</td>
                            <td><code class="language-plaintext highlighter-rouge">['xyz', 786, 2.23]</code></td>
                            <td>Data untaian yang menyimpan berbagai tipe data dan isinya bisa diubah-ubah</td>
                          </tr>
                          <tr>
                            <td>Tuple</td>
                            <td><code class="language-plaintext highlighter-rouge">('xyz', 768, 2.23)</code></td>
                            <td>Data untaian yang menyimpan berbagai tipe data tapi isinya tidak bisa diubah</td>
                          </tr>
                          <tr>
                            <td>Dictionary</td>
                            <td><code class="language-plaintext highlighter-rouge">{'nama': 'adi','id':2}</code></td>
                            <td>Data untaian yang menyimpan berbagai tipe data berupa pasangan penunjuk dan nilai</td>
                          </tr>
                        </tbody>
                      </table>
                      <p></p>
                      <p>Untuk mencoba berbagai macam tipe data, silahkan coba script Python dibawah ini.</p>
                </div>

                <!-- Contoh baris kode -->
                <div class="card">
                    <div class="card-header">
                        Tipe Data Integer
                    </div>
                    <div class="card-body">
                      <code>
                          <p class="my-0">bilangan =10</p>
                          <p class="ms-4 my-0">print(bilangan)</p>
                      </code>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Tipe Data Float
                    </div>
                    <div class="card-body">
                      <code>
                          <p class="my-0">bilangan =10.09</p>
                          <p class="ms-4 my-0">print(bilangan)</p>
                      </code>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Tipe Data String
                    </div>
                    <div class="card-body">
                      <code>
                          <p class="my-0">data = "Muzanni 1994"</p>
                          <p class="ms-4 my-0">print(data)</p>
                      </code>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Tipe Data Tuple
                    </div>
                    <div class="card-body">
                      <code>
                          <p class="my-0">data = ("Muzanni", 1994)</p>
                          <p class="ms-4 my-0">print(data)</p>
                      </code>
                    </div>
                </div>

                <!-- Page navigation -->
                <nav aria-label="Page navigation" class="mt-5">
                    <ul class="pagination">
                        <div class="col-md-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Materi sebelumnya">
                            <li class="page-item text-center active">
                                <a class="page-link" href="variabel.php" aria-label="Previous">
                                    <span aria-hidden="true">&laquo; Variabel</span>
                                </a>
                            </li>
                        </div>
                        <div class="col-md-8"></div>
                        <div class="col-md-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Materi selanjutnya">
                            <li class="page-item text-center active">
                                <a class="page-link" href="operator.php" aria-label="Next">
                                    <span aria-hidden="true">Operator &raquo;</span>
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
                <form action="tipe_data.php" method="post" name="langganan">
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
