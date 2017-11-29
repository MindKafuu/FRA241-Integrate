<form action="mind.php" method="post">
    <input type="text" name="name">
    <input type="submit">
</form>
<?php
if (!isset($_POST['name']))
return;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schedule";

echo $_POST['name'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM table_teacher_subject t1 INNER JOIN table_subject_description_output t2 ON t1.subject_code=t2.subject_code WHERE teacher_name='".$_POST['name']."'";
echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "teacher_name: " . $row["teacher_name"]. " - Subject: " . $row["subject_code"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>