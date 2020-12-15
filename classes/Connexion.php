<?php
  /* 
    TODO implementation pour la classe connexion à la bbdd
  */
  class Connexion {

    private $host = "localhost";
    private $db = "gites";
    private $user = "root";
    private $passwd = "";
    private $conn;

    public function __construct(){

      $strConn = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=utf8";

      try {
        $this->conn = new PDO( $strConn , $this->user, $this->passwd );
        $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $this->conn;
      } catch ( Exception $e ) {
        echo 'Error : ' . $e->getMessage();
      }
    }

    public function dbConnect(){
      return $this->conn;
    }

    

  }

  
