<?php
/*
********
API file
********
this file contains more functions
*********************************
1 - readAll()
2 - loadAll()
3 - stdReg()
4 - delete()
5 - update()
*/

header("Content-Type: application/json");

//including the connection file
include 'conn.php';

$action = $_POST['action'];

//1 - read all function
function readAll($conn){

  //global variables
  $data = array();
  $message = array();

  //read all the data in the database table of stdreg
  $query = "SELECT * FROM stdreg";

  $result = $conn -> query($query);

  if($result){

    while($row = $result ->fetch_assoc()){

      $data [] = $row;

    }
    $message = array("status" => true, "data" => $data);
  }else{
    $message = array("status" => false, "data" => $conn->error);
  }
  echo json_encode($message);
}

//2 - Update Students
function readStudentsInfo($conn){

  //global variables
  $data = array();
  $message = array();


  $stdId = $_POST['stdId'];

  //read all the data in the database table of stdreg
  $query = "SELECT * FROM stdreg WHERE stdId = '$stdId'";

  $result = $conn -> query($query);

  if($result){

    while($row = $result ->fetch_assoc()){

      $data [] = $row;

    }
    $message = array("status" => true, "data" => $data);
  }else{
    $message = array("status" => false, "data" => $conn->error);
  }
  echo json_encode($message);
}

//3 - Delete Students
function deleteStudentsInfo($conn){

  //global variables
  $data = array();
  $message = array();


  $stdId = $_POST['stdId'];

  //read all the data in the database table of stdreg
  $query = "DELETE FROM stdreg WHERE stdId = '$stdId'";

  $result = $conn -> query($query);

  if($result){
    $message = array("status" => true, "data" => $data);
  }else{
    $message = array("status" => false, "data" => $conn->error);
  }
  echo json_encode($message);
}

//4 - Register Students
function studentRegistration($conn){

  $data = array();

  $studentId = $_POST['stdId'];
  $studentName = $_POST['stdName'];
  $studentClass = $_POST['stdClass'];

  $query = "INSERT INTO stdreg(stdid,stdname,stdclass) VALUES('$studentId','$studentName','$studentClass')";

  $result = $conn->query($query);

  if($result){
    $data = array("status" => true, "data" => "SuccessFully Inserted...");
  }else{
    $data = array("status" => false, "data" => $conn->error);
  }
  echo json_encode($data);
}

//5 - Update Students
function updateStudent($conn){

  $data = array();

  $studentId = $_POST['stdId'];
  $studentName = $_POST['stdName'];
  $studentClass = $_POST['stdClass'];

  $query = "UPDATE stdreg set stdName = '$studentName', stdClass = '$studentClass' where stdId = '$studentId'";

  $result = $conn->query($query);

  if($result){
    $data = array("status" => true, "data" => "Updated SuccessFully..");
  }else{
    $data = array("status" => false, "data" => $conn->error);
  }
  echo json_encode($data);
}

if($action){
  $action($conn);
}else{
  echo "action is required...";
}

?>