<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("https://mysql.transip.nl/db_structure.php?server=1&db=jsvdmeer_net_form", "jsvdmeer_net_form", "pswd", "formulier");
 
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
$sql = "INSERT INTO formulier (Voornaam, Achternaam, Geslcaht, Onderwerp, Email, Bericht) VALUES ('$firstname', '$lastname', '$gender', '$subject' '$email', '$text')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

IegrK445020
