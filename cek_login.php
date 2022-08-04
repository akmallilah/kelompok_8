<?php 
//mengaktifkan session pada php
session_start();

//menghubungkan php dengan conn
require 'functions.php';

//menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password sesuai
$login = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' and password='$password'");

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

//cek apakah username dan password ditemukan pada database
if($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	//cek jika user login sebagai admin
	if($data['level']=="admin"){

		//buat session login dan username
		$_SESSION['username'] = $username; 
		$_SESSION['level'] = "admin";
		//alihkan ke halaman dashboard admin
		header("location: dashboard.php");

	//cek jika user login sebagai petugas
	}else if($data['level']=="staf"){
		//buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "staf";
		//alihkan ke halaman dashboard petugas
		header("location: dashboard.php");

	}else{
		//alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
}else{
		header("location:login.php?pesan=gagal");
} 
 ?>
