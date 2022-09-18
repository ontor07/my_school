<?php

class database
{
  public $hostadress="localhost";
  // public $username="winpbuorg_admin";
  // public $password="s5NTU[c1lzuE";  
  public $username="root";
  public $password="";
  public $database="dynamicschool";
  public $link;
  public $message;

  function __construct()
  {
    $this->database();
  }

  private function database() 
  {
    $this->link=new mysqli($this->hostadress,$this->username,$this->password,$this->database);
    if($this->link)
    {
      $this->message="Database Connection Successfulluy!!";
    }
    else
    {
      $this->message="Database Connection Unsuccessfull";
    }
  }
  public function insert($table,$parrmeter=array())
  {
    // print_r($parrmeter);
    $column= implode(',',array_keys($parrmeter) );
    // echo $column;

    $data= implode("','",$parrmeter);
    // echo $data;
    $sql ="INSERT INTO  $table($column) VALUES ('$data')";
    // echo $sql;
    $result= $this->link->query($sql);
    if($result)
    {
      echo"<div class='alert alert-success'>Data Insert Succesfully</div>";
    }
    else
    {
      echo "<div class='alert alert-danger'>Data Insert Unsuccesfully</div>";
    }
  }
  function __destruct()
  {
    $this->link->close();
  }




}

// $db=new database();
// echo $db->message;


?>
