<?php
session_start();
 if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password =$_POST['password'];

        $_SESSION['username'] = 'Algeori';
        $_SESSION['password'] = 'psdku2020';

        if($username == 'Algeori' && $password == 'psdku2020'){
        	header('Location: user.php');
        } else{
        	echo "<script>alert('Login gagal, username atau password salah');document.location='login.php'</script>";
        }
    }

?>