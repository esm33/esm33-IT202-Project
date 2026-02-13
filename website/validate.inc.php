<?php

// Name: Emily Morales Medina
// Date: 2/13/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 01
// email: esm33@njit.edu

error_log('$_POST ' . print_r($_POST, true)); //prints values in a array
//post info is specifically for forms, it sends data to the server in a way that is not visible in the url
//validates responsibility to grab two values from the login form and check them against the database

require_once('database.php'); //includes database connection file. this is important because we need to connect to the database to validate login info. without this line, the code will not work because it won't know how to connect to the database since the database.php file contains the connection details.

$emailAddress = $_POST['email_address'];
$password = $_POST['password'];
$query = "SELECT first_name, last_name, pronouns, phone_number FROM skincare_users WHERE email_address = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns, $phoneNumber);
$fetched = $stmt->fetch();
$db->close();
$name = "$firstName $lastName";
if ($fetched && isset($name)) {
    $_SESSION['login'] = true;
    $_SESSION['first_name'] = $firstName;
    $_SESSION['last_name'] = $lastName;
    $_SESSION['pronouns'] = $pronouns;
    $_SESSION['email_address'] = $emailAddress;
    $_SESSION['phone_number'] = $phoneNumber;
    $_SESSION['name'] = $name;
    header("Location: index.php");
} else {
    echo "<h2>Sorry, login incorrect for Skincare Inventory</h2>\n";
    echo "<a href=\"index.php\">Please try again</a>\n";
}
