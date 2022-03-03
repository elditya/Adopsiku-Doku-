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
                    <form method="POST" class="register-form" id="register-form" action ="config_regis_adop_2.php" enctype="multipart/form-data">
                        <h2>Adopter Form registrasi</h2>
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-user" id="id" name="id_adopter" value="<?php echo $id_adopter ?>" readonly>
                                <label for="foto">Tulis Ulang Username :</label>
                                <input type="text" name="username" id="username" required/>
                            </div>

                            <div class="form-group">
                                <label for="foto">foto :</label>
                                <input type="file" name="foto" id="foto" required/>
                            </div>
                            <div class="form-group">
                                <label for="ktp">Foto KTP :</label>
                                <input type="file" name="ktp" id="ktp" required/>
                            </div>

                            <div class="form-group">
                                <label for="kk">Foto Kartu Keluarga :</label>
                                <input type="file" name="kk" id="kk" required/>
                            </div>
                            <div class="form-group">
                                <label for="skck">Foto SKCK :</label>
                                <input type="file" name="skck" id="skck" required/>
                            </div>



                            <div class="form-group">
                                <label for="bk">Foto Buku Nikah :</label>
                                <input type="file" name="bk" id="bk" required/>
                            </div>
                            <div class="form-group">
                                <label for="skdk">Surat Keterangan Dokter Kandungan :</label>
                                <input type="file" name="skdk" id="skdk" required/>
                            </div>



                            <div class="form-group">
                                <label for="slip">Foto Slip Gaji :</label>
                                <input type="file" name="slip" id="slip" required/>
                            </div>
                            <div class="form-group">
                                <label for="spaa">Surat Pernyataan Adopsi Anak :</label>
                                <input type="file" name="spaa" id="spaa" required/>
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