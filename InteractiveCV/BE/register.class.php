<?php
$fn = "";
$ln=$_POST["ln"] ?? "";
$dob=$_POST["dob"] ?? "";
$sex=$_POST["sex"] ?? "";
$username = $_POST["username"] ?? "";
$password = $_POST["pass"] ?? "";
$storage = "../data/data.json";

$stored_users = json_decode(file_get_contents($storage), true);

$registered = false;

foreach ($stored_users as $user) {
    if ($user['username'] === $username) {
        $registered = true;
        break;
    }
}

if ($registered) {
    $error = "Username already exists. Please choose a different one.";
	header("Location: ../pages/signUp.php");
    // Handle the error as needed, maybe redirect back to the registration page
} else {
    // Proceed with registration
    $new_user = [
        "fn" => $_POST["fn"] ?? "",
        "ln" => $ln,
        "sex" => $sex,
        "dob" => $dob,
        "username" => $username,
        "password" => $password,
    ];

    $stored_users[] = $new_user;

    if (file_put_contents($storage, json_encode($stored_users, JSON_PRETTY_PRINT))) {
        // Registration successful
        header("Location: ../index.php");
        // Optionally, set success message or perform additional actions after successful registration
    } else {
        // Registration failed due to file write error
        $error = "Registration failed. Please try again.";
        // Handle the error as needed
    }
}
?>
