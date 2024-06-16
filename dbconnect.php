<?php 

require __DIR__.'/classes/mypdo.php';

try {
  // $dsn = 'mysql:dbname=fuji-sys;host=localhost';
  // $user = 'root';
  // $password = 'root';
  // $MyPDO = new MyPDO($dsn, $user, $password);
  
  // 本番環境
  $dsn = 'mysql:dbname=mseg;host=localhost';
  $user = 'root';
  $password = 'cans555-';
  $MyPDO = new MyPDO($dsn, $user, $password);

} catch (PDOException $e) {
  $err_msg = $e->getMessage();
  exit($err_msg);
}

?>