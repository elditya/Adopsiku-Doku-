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
              $query = mysqli_query($host, "SELECT max(id_adopter) as idTerbesar FROM table_adopter");
              $data = mysqli_fetch_array($query);
              $id_adopter = $data['idTerbesar'];  
              
              $urutan = (int) substr($id_adopter, 3, 3);
              $urutan++;
              $huruf = "ADP";
              $id_adopter = $huruf . sprintf("%03s", $urutan);
              ?>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action ="config_regis_adop_1.php" enctype="multipart/form-data">
                        <h2>Adopter Form registrasi</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Username :</label>
                                <input type="hidden" class="form-control form-control-user" id="id" name="id_adopter" value="<?php echo $id_adopter ?>" readonly>
                                <input type="text" name="username" id="username" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Password :</label>
                                <input type="password" name="password" id="password" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="text" name="email" id="email" required/>
                        </div>
                        <div class="form-group">
                            <label for="hobi">hobi :</label>
                            <input type="text" name="hobi" id="hobi" required/>
                        </div>
                        <div class="form-group">
                            <label for="telpon">Nomor Telpon :</label>
                            <input type="text" name="telepon" id="telpon" required/>
                        </div>
                        <div class="form-group">
                            <label for="TTL">Tanggal Lahir :</label>
                            <input type="date" name="TTL" id="TTL" required/>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto :</label>
                            <input type="hidden" class="form-control form-control-user" id="role" name="role" value="adopter" readonly>
                            <input type="file" name="foto" id="foto" required/>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Lanjutkan" class="submit" name="submit" id="submit" />
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