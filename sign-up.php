<?php 

require 'Koneksi.php';
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO data_dashboard (user, email, password)
            VALUES ('$username', '$email', '$password')";

    if(mysqli_query($conn, $query_sql)){
        header("Location: dashboard.php");
    }  else  {
        echo "sign-up Gagal :" . mysqli_error($conn);
    }

    include "Koneksi.php";
    
    if(isset($_POST['submit'])){
      mysqli_query($conn, "INSERT INTO signup set
      username = '$_POST[username]',
      email = '$_POST[email]',
      password = '$_POST[password]',");
    
      echo "data berhasil masuk";
    }
    

?>