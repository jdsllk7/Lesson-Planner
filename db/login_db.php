<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        isset($_POST["eNumber"]) &&
        isset($_POST["password"]) &&
        !empty($_POST["eNumber"]) &&
        !empty($_POST["password"])

    ) {

        $eNumber = $_POST['eNumber'];
        $password = $_POST['password'];

        $data = mysqli_query($conn, "SELECT * FROM users WHERE eNumber='$eNumber' AND password='$password'");

        if (mysqli_num_rows($data) == 1) {

            $user = mysqli_fetch_assoc($data);
            setcookie('userId', $user['userId'], time() + (86400 * 30), "/");
            setcookie('eNumber', $user['eNumber'], time() + (86400 * 30), "/");
            setcookie('fName', $user['fName'], time() + (86400 * 30), "/");
            setcookie('lName', $user['lName'], time() + (86400 * 30), "/");

            header('Location: index.php?msg=SUCCESS: Login Successful&type=true');
        } else {
            header('Location: login.php?msg=ERROR: Incorrect Credentials&type=false');
        }
    }
}
