<?php
echo "que pedo!";
$conn = pg_connect("host=localhost port=5432 dbname=rest_api_demo user=postgres password=admin");

class Database
{
  protected const CONN_STR = "host=localhost port=5432 dbname=rest_api_demo user=postgres";
  protected $connection = null;

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
