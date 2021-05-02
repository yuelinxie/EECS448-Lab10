<?php
$user = $_POST["user"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "yuelinxie", "oobiH7Ce", "yuelinxie");

if ($mysqli->connect_errno){
  printf("Connecting failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('$user')";

if ($userid == " "){
    echo "The new user should not be stored: The user left the text field empty<br>";
}
  else{
    $query = "INSERT INTO Users (user_id) VALUES ('".$user."')";
    if($mysqli->query($query)){
      echo "New user ".$user." is stored successfully<br>";
    }
    else{
      echo "The new user should not be stored: the user id ".$user." already existed<br><br>";
    }
}

$mysqli->close();
?>