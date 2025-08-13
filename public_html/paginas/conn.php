<?php
class DB{
    private static $conn;
    public function __construct(){}
    public static function conn(){
        if (is_null(self::$conn)) {
            $host = getenv('DB_HOST') ?: '127.0.0.1';
            $name = getenv('DB_NAME') ?: 'futleaguebr';
            $user = getenv('DB_USER') ?: 'root';
            $pass = getenv('DB_PASS') ?: '';
            $charset = 'utf8mb4';
            $dsn = "mysql:host={$host};dbname={$name};charset={$charset}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            self::$conn = new PDO($dsn, $user, $pass, $options);
        }
        return self::$conn;
    }
}
?>