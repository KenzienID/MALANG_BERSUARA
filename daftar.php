<?php session_start(); ?>
<?php
    include('conn/koneksi.php');

    if(isset($_POST["register"])){
        $nik = $_POST["nik"];
        $email = $_POST["email"];
        $nama = $_POST["name"];
        $username = $_POST["username"];
        $telp = $_POST["telp"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        $check_query = mysqli_query($koneksi, "SELECT * FROM masyarakat where email ='$email' OR username ='$username'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($nik) && !empty($email) && !empty($nama) && !empty($username) && !empty($password) && !empty($cpassword) && !empty($telp)){
            if($password !== $cpassword){
                ?>
                <script>
                    echo "<script>alert('Password Tidak Sama!')</script>";
                </script>
                <?php
            }
            if($rowCount > 0){
                ?>
                <script>
                    echo "<script>alert('Akun dengan email / username tersebut sudah ada')</script>";
                </script>
                <?php
            }else{
                $password_hash = md5($_POST['password']);

                $result = mysqli_query($koneksi, "INSERT INTO masyarakat (nik, email, nama, username, password, telp, verif) VALUES ('$nik', '$email', '$nama', '$username', '$password_hash', '$telp',  0)");
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='sekolahkarijeneng@gmail.com';
                    $mail->Password='cphnjcbygasymxiy';
    
                    $mail->setFrom('pengaduanmalkot@gmail.com', 'noreply@malangkota.go.id');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Kode Verifikasi Akun Pelaporan Anda";
                    $mail->Body="<p>Kepada $name, </p>
                    <h3>Kode verifikasi akun anda adalah $otp <br></h3>
                    <br><br>
                    <p>Hormat kami</p>
                    <b>Pemerintah Kota Malang</b>";
    
                    if(!$mail->send()){
                        ?>
                            <script>
                                echo "<script>alert('Alamat Email Tidak Valid!')</script>";
                            </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            window.location.replace('verifikasi_daftar.php');
                        </script>
                        <?php
                    }
                }
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Halaman Pendaftaran MalangBersuara</title>
    <link rel="stylesheet" href="css/daftar2.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="icon" href="../image/register.png">
</head>

<body>
    <div class="box" style="height: 800px">
        <div class="form">
            <form action="#" method="POST" onsubmit="return verifyPassword()">
                <h2>Daftar Masyarakat</h2>
                    <div class="inputBox">
                        <input type="number" id="nik"  name="nik" required="required" pattern="{16}" title="Masukkan 16 nomor NIK anda" autocomplete="off" style="color: #fff;">
                        <span>NIK</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="name" id="name"  name="name" required="required" title="Masukkan maksimal 32 karakter" autocomplete="off" pattern="[a-zA-Z}{0,32}" style="color: #fff;">
                        <span>Nama Lengkap</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="name" id="username"  name="username" required="required" title="Masukkan maksimal 32 karakter" autocomplete="off" style="color: #fff;">
                        <span>Nama Pengguna</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="text" id="email_address" name="email" required="required" title="Masukkan alamat email yang valid" autocomplete="off" style="color: #fff;">
                        <span>Alamat Email</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" id="password"  name="password" required="required" pattern="{8,}" title="Masukkan minimal 8 karakter" autocomplete="off" style="color: #fff;">
                        <span>Kata Sandi</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" id="cpassword"  name="cpassword" required="required" autocomplete="off" style="color: #fff;">
                        <span>Konfirmasi Kata Sandi</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="number" id="telp"  name="telp" required="required" pattern=".{10,}" title="Masukkan minimal 10 nomor" autocomplete="off" style="color: #fff;">
                        <span>Nomor Telpon</span>
                        <i></i>
                    </div>
                    <br>
                        <input type="submit" value="Daftar" name="register">
                        <br>
                        <br>
                    <div class="links">
                        <p>Sudah mempunyai akun? </p>
                        <br>  
                        <a align="center" href="cek.php">Masuk disini</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>