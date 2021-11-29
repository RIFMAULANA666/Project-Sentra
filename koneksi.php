<?php

$conn = mysqli_connect("localhost", "root", "jadoo2004", "project");

function registrasi($data){

	global $conn;

	$username = $data["username"];
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	if (password !== password2) {
		echo "Daftar Berhasil!";
	}
	return false;
}
 mysqli_querry($conn, "INSERT INTO user VALUE('', '$username','$password')");

 return mysqli_affected_rows($conn);

?>