<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "yuelinxie", "oobiH7Ce", "yuelinxie");

if ($mysqli->connect_errno){
    printf("Connecting failed: %s\n", $mysqli->connect_error);
    exit();
}

echo "<table>";
$user = $_POST["user"];
$query = "SELECT content FROM Posts WHERE author_id='".$user."'";
if($result = $mysqli->query($query)){
    echo "<th>User ".$user. "'s Posts</th>";
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["content"]."</td>";
        echo "</tr>";
    }
}
else{
    echo "There is no post.";
}

$mysqli->close();
?>