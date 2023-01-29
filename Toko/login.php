<?php 
session_start();
include("koneksi.php");
if(!$_POST['user'] || !$_POST['psw']){
	echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";	
	echo "<meta http-equiv='refresh' content='0;index.php'>";		
}else {
	$sql = "Select * from tblpengguna where user='$_POST[user]' And password='".md5($_POST['psw'])."'";
	$proses = mysqli_query($conn,$sql);
	$data = mysqli_fetch_array($proses);
	$login = mysqli_num_rows($proses);
	if ($login==0){
		echo "<script>alert('Password Anda salah !')</script>";
		echo "<meta http-equiv='refresh' content='0;index.php'>";
	}else{
		$_SESSION['user'] =$data['user'];
		echo "<meta http-equiv='refresh' content='0;home.php'>";
	}
}
?>