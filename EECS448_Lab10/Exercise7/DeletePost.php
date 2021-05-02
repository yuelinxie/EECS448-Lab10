<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "yuelinxie", "oobiH7Ce", "yuelinxie");

if ($mysqli->connect_errno){
    printf("Connecting failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT post_id FROM Posts'";
$delete = $_POST["delete"];
foreach ($delete as $postid){
    $qry = "DELETE FROM Posts WHERE post_id='$postid'";
    if ($result = $mysqli->query($qry)){
        echo "The post " .$postid." delete successsfully<br>"; 
    }
    else{
        echo "The post " .$postid." delete failed <br>";
    }
}

$mysqli->close();
?>