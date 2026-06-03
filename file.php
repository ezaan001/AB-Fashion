<?php

$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Email = $_POST['Email'];
$Contact = $_POST['Contact'];
$Gender = $_POST['Gender'];
$Address = $_POST['Address'];

// Database connection
$conn = mysqli_connect("localhost", "root", "", "form_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{

$stmt = $conn->prepare ("insert into Form (Firstname, Lastname, Email, Contact, Gender, Address) 
VALUES (?,?,?,?,?,?)");

$stmt->blind_param("sssiss",$Firstname, $Lastname, $Email, $Contact, $Gender, $Address);
$stmt->execute();

echo "Registration Successfully"
$stmt->close();
$conn->close();
}

?>