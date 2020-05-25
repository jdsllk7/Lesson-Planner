<?php

$error_msg = 'Sorry could not connect to server...';
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'lessons_db';

// CREATE CONNECTION
$conn = mysqli_connect($servername, $username, $password);

// CHECK CONNECTION
if (!$conn) {
    die($error_msg);
}

// CREATE THE DATABASE
// $sql = "DROP DATABASE IF EXISTS $db";
$sql = "CREATE DATABASE IF NOT EXISTS $db";
if (mysqli_query($conn, $sql)) {
    $conn = mysqli_connect($servername, $username, $password, $db);
} else {
    die($error_msg);
}


$sql = "CREATE TABLE IF NOT EXISTS users (
	userId BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	eNumber VARCHAR(200) NOT NULL,
	fName VARCHAR(200) NOT NULL,
	lName VARCHAR(200) NOT NULL,
	password VARCHAR(200) NOT NULL
	)";
// $sql = "DROP TABLE IF EXISTS users";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS lesson (
	lessonId BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	grade VARCHAR(200) NOT NULL,
	subject VARCHAR(200) NOT NULL,
	topic VARCHAR(200) NOT NULL,
	lessonsName VARCHAR(200) NOT NULL,
	userId BIGINT(20) UNSIGNED,
	FOREIGN KEY (userId) REFERENCES users(userId)
	)";
// $sql = "DROP TABLE IF EXISTS lesson";
mysqli_query($conn, $sql);

$sql = "CREATE TABLE IF NOT EXISTS lessonFiles (
	fileId BIGINT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	fileText VARCHAR(300),
	filePath VARCHAR(300),
	fileType VARCHAR(20),
	lessonId BIGINT UNSIGNED,
	FOREIGN KEY (lessonId) REFERENCES lesson(lessonId)
	)";
// $sql = "DROP TABLE IF EXISTS lessonFiles";
mysqli_query($conn, $sql);
