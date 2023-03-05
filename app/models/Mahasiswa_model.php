<?php
class Mahasiswa_model {
        private $dbh; // database handler
        private $stmt; // statement


        public function __construct()
        {
            // data source name
            $dsn = "mysql:host=localhost;dbname=resto";
            try {
                // PDO("mysql:host=$servername;dbname=myDB", $username, $password)
                $this->dbh = new PDO($dsn, 'root', '');
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }

        public function getAllMahasiswa() {
            // pemanggilan statement untuk diisi dengan handler dan query dengan function query
            $this->stmt = $this->dbh->prepare('SELECT * FROM menu');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}