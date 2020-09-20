<?php 

namespace Quiz\Database;

class DatabaseConnector {
  
  private $host = 'localhost';
  private $user = 'root';
  private $pass = 'root';
  private $dbname = 'quiz';

  private $dbh;
  private $stmt;
  private $error;
  

  public function __construct()
  {
    $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
    $options = array(
      \PDO::ATTR_PERSISTENT => true,
      \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
    );

    try{
      $this->dbh = new \PDO($dsn, $this->user, $this->pass, $options);    
    }catch(\PDOException $e){
      $this->error = $e->getMessage();
      echo $this->error;
    }
    
  }

  /**
   * Prepare statement with query
   */
  public function query($sql)
  {
    $this->stmt = $this->dbh->prepare($sql);
  }

  public function bind($param, $value)
  {
    $this->stmt->bindParam($param, $value);
  }

  /**
   * execute the prepared statements
   */
  public function execute()
  {
    return $this->stmt->execute();
  }

  /**
   * Returns result set as array of objects
   */
  public function resultSet()
  {
    $this->execute();
    return $this->stmt->fetchAll(\PDO::FETCH_OBJ);
  }

  /**
   * Returns single record as object
   */
  public function single()
  {
    $this->execute();
    return $this->stmt->fetch(\PDO::FETCH_OBJ);
  }
}