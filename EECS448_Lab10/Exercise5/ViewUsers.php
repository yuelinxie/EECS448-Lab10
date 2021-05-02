<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "yuelinxie", "oobiH7Ce", "yuelinxie");

if ($mysqli->connect_errno){
    printf("Connecting failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM Users;";

if ($result = $mysqli->query($query)){
    echo "<table>";
	echo "<th> Table of Users</th>";
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["user_id"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

$mysqli->close();
?>