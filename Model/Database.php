<?php
echo "que pedo!";
class Database
{
  protected const CONN_STR = "host=localhost port=5432 dbname=rest_api_demo user=postgres password=admin";
  protected $connection = null;

  public function __construct()
  {
    try {
      $this->connection = pg_connect(self::CONN_STR);

      if (!$this->connection) {
        throw new Exception("Could not connect to database.");
      }
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }

  static function connect()
  {
    $conn = pg_connect("host=localhost port=5432 dbname=rest_api_demo user=postgres password=admin");
    if (!$conn) {
      echo "An error occurred!.\n" . pg_last_error();
      exit;
    }
    $result = pg_query($conn, "select * from users");
    var_dump(pg_fetch_all($result));
  }
}

Database::connect();
