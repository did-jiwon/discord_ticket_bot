<?php

class DB{
    private static $conn;
    private static $stmt;
    private static $id = "root";
    private static $passwd = "111111";
    private static $dsn;

    public static function connect(){
        if(!self::$conn){
            self::$dsn = "mysql:host=localhost;port=3306;dbname=opentutorials;charset=utf8";
            try{
                self::$conn = new PDO(self::$dsn, self::$id, self::$passwd);
                self::$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$query = "CREATE TABLE IF NOT EXISTS topic (
						id varchar(20) primary key,
						password varchar(60) not null,
						name varchar(10)
					)";
				self::$conn->query($query);
            }catch(PDOException $e){
                throw $e;
            }
        }
    }

    public static function query($query, $params = null){
		self::connect();

        try{
			if($params == null) {
				self::$stmt = self::$conn->query($query);
			} else {
				self::$stmt = self::$conn->prepare($query);
				foreach($params as $column=>$value){
					self::$stmt->bindValue($column, $value);
				}
				self::$stmt->execute();
			}
			$result = self::$stmt->fetchAll();
        }catch(PDOException $e){
            $result = null;
        }
        return $result;
    }
    
    public static function lastInsertId(){
        if(self::$conn){
            return self::$conn->lastInsertId();
        }
    }
}
?>