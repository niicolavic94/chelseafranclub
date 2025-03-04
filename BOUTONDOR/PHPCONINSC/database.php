<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'chelsea';
    private $username = 'root';
    private $password = '';
    private $connection;

    public function getConnection() {
        if ($this->connection === null) {
            try {
                $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            } catch (Exception $e) {
                // En production, il serait préférable de logger l'erreur plutôt que de l'afficher
                die("Erreur de connexion : " . $e->getMessage());
            }
        }
        return $this->connection;
    }
}
?>