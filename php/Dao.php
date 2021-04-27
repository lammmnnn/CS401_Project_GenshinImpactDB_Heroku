<?php

require_once 'KLogger.php';

class Dao {

  public $dsn = 'mysql:dbname=heroku_0e8876a7d92cfcb;host=us-cdbr-east-03.cleardb.com';
  public $user = "b526e66a7b56a1";
  public $password = "3f745a44";
  protected $logger;

  public function __construct () {
    $this->logger = new KLogger ( "log.txt" , KLogger::DEBUG );
  }

  private function getConnection () {
    try {
        $connection = new PDO($this->dsn, $this->user, $this->password);
        $this->logger->LogDebug("Got a connection");
    } catch (PDOException $e) {
        $error = 'Connection failed: ' . $e->getMessage();
        $this->logger->LogError($error);
    }
    return $connection;
  }

  public function getUser ($username) {
    $connection = $this->getConnection();
    try {
        $q = $connection->prepare("select username, email from user_table where username = :username");
        $q->bindParam(":username", $username);
        $q->execute();
        $row = $q->fetch();
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
    return $row;
  }

  public function loginMatch ($username, $password) {
    $connection = $this->getConnection();
    try {
        $q = $connection->prepare("select count(*) as total from user_table where username = :username and password = :password");
        $q->bindParam(":username", $username);
        $q->bindParam(":password", $password);
        $q->execute();
        $row = $q->fetch();
        if ($row['total'] == 1) {
           $this->logger->LogInfo("user found!" . print_r($row,1));
           return true;
        } else {
           return false;
        }
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
  }

  public function userExist ($username) {
    $connection = $this->getConnection();
    try {
        $q = $connection->prepare("select count(*) as total from user_table where username = :username");
        $q->bindParam(":username", $username);
        $q->execute();
        $row = $q->fetch();
        if ($row['total'] == 1) {
           $this->logger->LogInfo("user existed!" . print_r($row,1));
           return true;
        } else {
           return false;
        }
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
  }

  public function emailExist ($email) {
    $connection = $this->getConnection();
    try {
        $q = $connection->prepare("select count(*) as total from user_table where email = :email");
        $q->bindParam(":email", $email);
        $q->execute();
        $row = $q->fetch();
        if ($row['total'] == 1) {
           $this->logger->LogInfo("email used!" . print_r($row,1));
           return true;
        } else {
           return false;
        }
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
  }

  public function createUser ($username, $password, $email) {
    $this->logger->LogInfo("inserting a new user username=[{$username}], email=[{$email}]");
    $conn = $this->getConnection();
    $addUserQuery = "insert into user_table (username, password, email) values (:username, :password, :email)";
    $q = $conn->prepare($addUserQuery);
    $q->bindParam(":username", $username);
    $q->bindParam(":password", $password);
    $q->bindParam(":email", $email);
    $q->execute();
  }

  public function deleteComment ($id) {
    $this->logger->LogInfo("deleting comment id [{$id}]");
    $conn = $this->getConnection();
    $deleteQuery = "delete from comment where comment_id = :id";
    $q = $conn->prepare($deleteQuery);
    $q->bindParam(":id", $id);
    $q->execute();
  }

  public function insertComment ($name, $comment) {
    $this->logger->LogInfo("inserting a comment name=[{$name}], comment=[{$comment}]");
    $conn = $this->getConnection();
    $saveQuery = "insert into comment (name, comment) values (:name, :comment)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":name", $name);
    $q->bindParam(":comment", $comment);
    $q->execute();
  }

  public function getCharacters () {
    $connection = $this->getConnection();
    try {
        $rows = $connection->query("select * from character_table order by name", PDO::FETCH_ASSOC);
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
    return $rows;
  }

  public function getWeapons ($type) {
    $connection = $this->getConnection();
    try {
      $rows = $connection->query("select * from weapon_table", PDO::FETCH_ASSOC);
      if (strlen($type) > 0) {
        $rows = $connection->query("select * from weapon_table where type = '" . $type . "' order by rarity", PDO::FETCH_ASSOC);
      }
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
    return $rows;
  }

  public function getMaterials ($type) {
    $connection = $this->getConnection();
    try {
      $rows = $connection->query("select * from material_table", PDO::FETCH_ASSOC);
      if (strlen($type) > 0) {
        $rows = $connection->query("select * from material_table where type = '" . $type . "' order by rarity", PDO::FETCH_ASSOC);
      }
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
    return $rows;
  }

  public function getComments () {
    $connection = $this->getConnection();
    try {
        $rows = $connection->query("select name, comment_id, comment, date_entered from comment order by date_entered desc", PDO::FETCH_ASSOC);
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
    return $rows;
  }

}
