<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi DOKU</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style-2.css">
</head>
<?php
              
              include '../koneksi.php';
              $query = mysqli_query($host, "SELECT max(id_panti) as idTerbesar FROM table_panti");
              $data = mysqli_fetch_array($query);
              $id_panti = $data['idTerbesar'];  
              
              $urutan = (int) substr($id_panti, 3, 3);
              $urutan++;
              $huruf = "PNT";
              $id_panti = $huruf . sprintf("%03s", $urutan);
              ?>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="config_regis_panti.php" class="register-form" id="register-form" enctype="multipart/form-data">
                        <h2>Panti Asuhan Form registrasi</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Username :</label>
                                <input type="hidden" class="form-control form-control-user" id="id" name="id_panti" value="<?php echo $id_panti ?>" readonly>
                                <input type="text" name="username" id="username" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Password :</label>
                                <input type="password" name="password" id="password" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Email :</label>
                            <input type="text" name="email" id="email" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">Nama Panti Asuhan :</label>
                            <input type="text" name="nama_panti" id="nama_panti" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat Panti Asuhan :</label>
                            <input type="text" name="alamat_panti" id="alamat_panti" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">Nomor Telpon Panti Asuhan :</label>
                            <input type="text" name="nomor_telepon" id="nomor_telepon" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">Foto Panti Asuhan :</label>
                            <input type="file" name="foto_panti" id="foto_panti" required/>
                        </div>
                        <div class="form-group">
                            <label for="address">Foto Profil Panti Asuhan :</label>
                            <input type="hidden" class="form-control form-control-user" id="role" name="role" value="panti" readonly>
                            <input type="file" name="foto_pf" id="foto_pf" required/>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Registrasi" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>