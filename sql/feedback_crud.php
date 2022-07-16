<?php include '/Users/davidking/Coding/Basics/php/php1/config/postgres.php';

function getAll(){
  $result = pg_query(dbconn, "SELECT * FROM feedback");
  if (!$result) {
      echo "An error occurred.\n";
      exit;
  }
  
  $feedback = pg_fetch_all($result);
  
  return $feedback;
}


function insert($name,$email,$body){
  $payloadArray = ['name'=>$name,'email'=>$email,'body'=>$body];
  $res = pg_insert(dbconn, 'feedback', $payloadArray);
  return $res;
}

function delete($arr){
  $res = pg_delete(dbconn, 'feedback', $arr);
  if ($res) {
    header("Location: feedback.php");
  } else {
    echo "User must have sent wrong inputs\n";
  }
}