<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "jsvdmeer_net_database", "AkHKV7F6VwkH", "jsvdmeer_net_database");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$subject = mysqli_real_escape_string($link, $_REQUEST['subject']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$text = mysqli_real_escape_string($link, $_REQUEST['text']);
 
// Attempt insert query execution
$sql = "INSERT INTO formulier (Voornaam, Achternaam, Geslacht, Onderwerp, Email, Bericht) 
VALUES ('$firstname', '$lastname', '$gender', '$subject', '$email', '$text')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

