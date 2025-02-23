<?php
class Database {
    private static $host = "localhost";
    private static $db_name = "db_maktab";
    private static $username = "root";
    private static $password = "";
    private static $conn;

    public static function connect() {
        if (!self::$conn) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Koneksi gagal: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
