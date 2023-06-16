<?php 
session_start() ;
include('conn/koneksi.php');
?>

<?php
    if(isset($_POST["reset"])){
        include('conn/koneksi.php');
        $psw = md5($_POST["password"]);
        $cpsw = md5($_POST["cpassword"]);
        
        if($psw !== $cpsw){
            $errors['password'] = "Password tidak sama";
        }

        $token = $_SESSION['token'];
        $Email = $_SESSION['email'];

        $hash = password_hash( $psw , PASSWORD_DEFAULT );

        $sql = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE email='$Email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if($psw !== $cpsw){
            ?>
            <script>
                window.location.replace('./popup/password_pts.php');
            </script>
            <?php
        }
        if($Email){
            $new_pass = $hash;
            mysqli_query($koneksi, "UPDATE masyarakat SET password='$psw' WHERE email='$Email'");
            ?>
            <script>
                window.location.replace("./popup/password_berhasil.php");
            </script>
            <?php
        }else{
            ?>
            <script>
                window.location.replace("./popup/password_err.php");
            </script>
            <?php
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Pemulihan Kata Sandi</title>
    <link rel="stylesheet" href="./css/verifikasi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <link rel="icon" href="../image/forget.png">
</head>

<body>
    <div class="box">
        <div class="form">
            <form action="#" method="POST">
                <h2>Ketikkan Kata Sandi Baru</h2>
                    <div class="inputBox">
                        <input type="password" id="password"  name="password" required="required" autocomplete="off" autofocus>
                        <span>Sandi Baru</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" id="password"  name="cpassword" required="required" autocomplete="off" autofocus>
                        <span>Konfirmasi Sandi Baru</span>
                        <i></i>
                    </div>
                    <input type="submit" value="Kirim" name="reset">
                    <br>
                </form>
        </div>
    </div>
</body>