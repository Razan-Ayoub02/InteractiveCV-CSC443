<?php
session_start();
echo"heyy";
$fn = "";
$username = $_POST["username"];
$password = $_POST["pass"];
$storage = "../data/data.json";

$stored_users = json_decode(file_get_contents($storage), true);

$loggedIn = false;

foreach ($stored_users as $user) {
    if ($user['username'] === $username && $user['password']=== $password) {
			$fn=$user['fn'];
            $loggedIn = true;
            break;
        }
    
}

if ($loggedIn) {

    $_SESSION["fn"] = $fn;
    header("Location: ../pages/mainPage.php");
} else {
    echo "WRONGGGGGGGGG";
    header("Location: ../index.php");
}
?>
