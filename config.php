<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'pylearn_database';
$databaseUsername = 'pylearnm_root';
$databasePassword = 'Nayusanu123@';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 

class Database {
    var $host = 'localhost';
    var $database = 'pylearnm_database';
    var $username = 'pylearnm_root';
    var $password = 'Nayusanu123@';
    var $connection = '';

    function __construct() {
        $this->connection = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if(mysqli_connect_errno()) {
            echo "Koneksi database gagal: ". mysqli_connect_error();
        }
    }

    function save($email) {
        mysqli_query(
            $this->connection,
            "INSERT INTO subscriber(id, email)
            VALUES ('', '$email')"
        );
    }
}
?>