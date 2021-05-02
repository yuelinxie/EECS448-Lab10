<?php
$user = $_POST["user"];
$post = $_POST["post"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "yuelinxie", "oobiH7Ce", "yuelinxie");

if ($mysqli->connect_errno){
    printf("Connecting failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM Users WHERE user_id = '$user'";

if ($result = $mysqli->query($query)){
    if ($post == " "){
        echo "Post can't be empty!<br>";
    }
    else if ($row["user_id"] == $user){
        $user_exist = true;
    }
    else if (!$user_exist){
        echo "User_id doesn't exist!<br>";
    }
    else{
        $query2 = "INSERT INTO Posts (post_id, content, author_id) VALUES ('NULL','$post','$user')";
        if ($mysqli->query($qry)) {
            echo "Post Adding Successfully.<br>";
        }
    }
}

$mysqli->close();
?>