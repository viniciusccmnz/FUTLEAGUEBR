<?php class DB{
	private static $conn;
	public function __construct(){}
	public static function conn(){
		
	if(is_null(self::$conn)){
	self::$conn = new PDO("mysql:host=localhost;dbname=futlea52_kjgol_1;","futlea52_futleaguebr","burro101997");
		}
		return self::$conn;
	}
}

?>