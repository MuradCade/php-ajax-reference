<?php

header("Content-Type: application/json");
include'db.php';

$action = $_POST['action'];

function readAll($conn){
    $data = array();
    $msg = array();
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    if($result){
        while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            $msg = array("status"=>true , "data"=>$data);
        }
        else{
            $msg = array("status"=>false , "data"=>$conn-error);
        }

        
        echo json_encode($msg);
}


function addstudent($conn){
    $studentname = $_POST['name'];
    $studentphone = $_POST['phone'];
    $studentclass = $_POST['class'];
    $msg = array();
    $sql = "INSERT INTO students(name,phone,class) VALUES('$studentname','$studentphone','$studentclass')";
    $result = $conn->query($sql);

    if($result){
        $msg = array("status"=>true , "msg"=>"Student Registered Successfully");
      }  else{
            $msg = array("status"=>false , "msg"=>"Student Failed To Register");
        }

        echo json_encode($msg);
}




// if($action){
//     $action($conn);
  
// }
// else{
//  echo "Action Required";
// }

if($action){
    $action($conn);
}
else{
    echo "Action is not defined and its has post array aka not found";
}

?>