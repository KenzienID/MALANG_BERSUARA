<?php 

include('../conn/koneksi.php');

    if(isset($_POST['input'])){
        $password = md5($_POST['password']);

        $query=mysqli_query($koneksi,"INSERT INTO petugas VALUES (NULL,'".$_POST['nama']."','".$_POST['email']."','".$_POST['username']."','".$password."','".$_POST['telp']."','".$_POST['level']."')");
        if($query){
            echo "<script>alert('Data Ditambahkan')</script>";
            echo "<script>location='index.php?p=user'</script>";
            echo "<script>location.reload()</script>";
        }
    }
?>

<link rel="stylesheet" href="../css/daftar.css">


    <section class="container">
        <form method="POST">
        <div class="input-box">
          <label for="nama">Nama</label>
          <input id="nama" type="text" name="nama" style="color: #fff; !important" required />
        </div>

        <div class="input-box">
          <label for="email">Alamat Email</label>
          <input id="email" type="text" name="email" style="color: #fff; !important" required />
        </div>

        <div class="input-box">
          <label for="username">Nama Pengguna</label>
          <input id="username" type="text" name="username"style="color: #fff; !important" required />
        </div>

        <div class="input-box">
          <label for="password">Kata Sandi</label>
          <input id="password" type="password" name="password" pattern={6} style="color: #fff; !important" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label for="telp">Nomor Telepon</label>
            <input id="telp" type="number" name="telp" style="color: #fff; !important" required />
          </div>
        </div>

          <label>Level</label>
          <div class="column">
            <div class="select-box">
              <select class="default" name="level" style="color: #fff; !important">
                <option value="petugas" >Petugas</option>
              </select>
            </div>
          </div>
        </div>
        <input type="submit" name="input" value="Simpan">
      </form>
    </section>
  </body>
</html>

