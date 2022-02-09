<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, doc_type,doc_level,uploader_name,doc_owner, expectation FROM upload";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " doc type:" . $row["doc_type"] ." doc level:" . $row["doc_level"] ." uploader name:" . $row["uploader_name"] ." doc owner:" . $row["doc_owner"] ." expectation:" . $row["expectation"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>