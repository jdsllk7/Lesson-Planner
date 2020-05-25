<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        isset($_POST["eNumber"]) &&
        isset($_POST["fName"]) &&
        isset($_POST["lName"]) &&
        isset($_POST["password"]) &&
        !empty($_POST["eNumber"]) &&
        !empty($_POST["fName"]) &&
        !empty($_POST["lName"]) &&
        !empty($_POST["password"])
    ) {

        $eNumber = $_POST["eNumber"];
        $fName = $_POST["fName"];
        $lName = $_POST["lName"];
        $password = $_POST["password"];

        //insert
        $sql = "INSERT INTO users (
        eNumber,
        fName,
        lName,
        password
        ) VALUES (
          '$eNumber',
          '$fName',
          '$lName',
          '$password'
          )";

        $data = mysqli_query($conn, "SELECT * from users WHERE eNumber like '$eNumber'");

        if (mysqli_num_rows($data) == 0) {

            mysqli_query($conn, $sql); //run insert query
            $userId = mysqli_insert_id($conn);

            header('Location: login.php?msg=SUCCESS: Signup successful. Please login to get started&type=true');
        }
    } else {
        header('Location: register.php?msg=ERROR: Unable to register your account. Please try again&type=false');
    }
}//end if(POST)
