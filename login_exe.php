<?php
	if(isset($_POST['login'])){
	include "koneksi.php";
					
	$username	= $_POST['username'];
	$password	= $_POST['password'];

					
	$query = mysqli_query($connect, "SELECT * FROM profil WHERE password='$password' AND username='$username'");
	if(mysqli_num_rows($query) == 0){
	echo "<script>alert('Password Salah');document.location='index.php'</script>";
	}else{
	$row = mysqli_fetch_assoc($query);
	$_SESSION['id']=$row['id'];
	$_SESSION['username']=$row['username'];
    $_SESSION['level'] = $row['level'];
		if($row['level'] == "admin")
        {
            
            header("Location: admin/index.php");
        }
        else if($row['level'] == "mahasiswa")
        {
            
            header("Location: mahasiswa/index.php");
		}
		else if($row['level'] == "dosen")
		{

			header("Location: dosen/index.php");
		}
        else
        {
            $error = "Failed Login";
        }
	}
}
if(isset($_POST['register'])){
	include "koneksi.php";
	header("location: register.php");
}
?>