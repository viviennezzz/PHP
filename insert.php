<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "cit336_hw");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$LastName = mysqli_real_escape_string($link, $_GET['LastName']);
$FirstName = mysqli_real_escape_string($link, $_GET['FirstName']);
$Phone = mysqli_real_escape_string($link, $_GET['Phone']);
 
$sql = "INSERT INTO 'customers' ('LastName', 'FirstName', 'Phone') VALUES ('$LastName', '$FirstName', '$Phone')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>