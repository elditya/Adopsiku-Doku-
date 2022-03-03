<?php

include 'template/header.php'

?>

<!-- Grafik -->

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Selamat Datang Admin </h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                    </div>
                </div>
            </div>
        </div>
        <?php 
        
        $tahun = date('Y');
        
        ?>

        <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-10">
                            
                                <h4 class="card-title mb-0">Laporan Data Anak Yang Telah Di Adopsi Pada Aplikasi DOKU Tahun <?php echo date(' Y'); ?></h4>
                                <br>
                            </div>
                            <!--/.col-->
                            
                                
                            <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>Januari</th>
                                            <th>Febuari</th>
                                            <th>Maret</th>
                                            <th>April</th>
                                            <th>Mei</th>
                                            <th>Juni</th>
                                            <th>Juli</th>
                                            <th>Agustus</th>
                                            <th>September</th>
                                            <th>Oktober</th>
                                            <th>November</th>
                                            <th>Desember</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php

                                            include "../koneksi.php";
                                            //januari
                                            $query_mysql_januari = mysqli_query($host, "SELECT * FROM history where bulan like '%january%' and tahun = '$tahun' ");
                                            $januari = mysqli_num_rows($query_mysql_januari);
                                            $januari_data = mysqli_fetch_array($query_mysql_januari);

                                            //febuari
                                            $query_mysql_febuari = mysqli_query($host, "SELECT * FROM history where bulan like '%febuary%' and tahun = '$tahun'");
                                            $febuari = mysqli_num_rows($query_mysql_febuari);
                                            $febuari_data = mysqli_fetch_array($query_mysql_febuari);

                                            //maret
                                            $query_mysql_maret = mysqli_query($host, "SELECT * FROM history where bulan like '%march%' and tahun = '$tahun'");
                                            $maret = mysqli_num_rows($query_mysql_maret);
                                            $maret_data = mysqli_fetch_array($query_mysql_maret);

                                            //april
                                            $query_mysql_april = mysqli_query($host, "SELECT * FROM history where bulan like '%april%' and tahun = '$tahun'");
                                            $april = mysqli_num_rows($query_mysql_april);
                                            $april_data = mysqli_fetch_array($query_mysql_april);

                                            //mei
                                            $query_mysql_mei = mysqli_query($host, "SELECT * FROM history where bulan like '%may%' and tahun = '$tahun'");
                                            $mei = mysqli_num_rows($query_mysql_mei);
                                            $mei_data = mysqli_fetch_array($query_mysql_mei);

                                            //juni
                                            $date = date("Y");
                                            $query_mysql_juni = mysqli_query($host, "SELECT * FROM history where bulan like '%june%' and tahun = '$tahun'") ;
                                            $juni = mysqli_num_rows($query_mysql_juni);
                                            $juni_data = mysqli_fetch_array($query_mysql_juni);
                                            

                                            //juli
                                            $query_mysql_juli = mysqli_query($host, "SELECT * FROM history where bulan like '%july%' and tahun = '$tahun'");
                                            $juli = mysqli_num_rows($query_mysql_juli);
                                            $juli_data = mysqli_fetch_array($query_mysql_juli);

                                            //agustus
                                            $query_mysql_agustus = mysqli_query($host, "SELECT * FROM history where bulan like '%august%' and tahun = '$tahun'");
                                            $agustus = mysqli_num_rows($query_mysql_agustus);
                                            $agustus_data = mysqli_fetch_array($query_mysql_agustus);
                                            
                                            //september
                                            $query_mysql_september = mysqli_query($host, "SELECT * FROM history where bulan like '%september%' and tahun = '$tahun'");
                                            $september = mysqli_num_rows($query_mysql_september);
                                            $september_data = mysqli_fetch_array($query_mysql_september);

                                            //oktober
                                            $query_mysql_oktober = mysqli_query($host, "SELECT * FROM history where bulan like '%october%' and tahun = '$tahun'");
                                            $oktober = mysqli_num_rows($query_mysql_oktober);
                                            $oktober_data = mysqli_fetch_array($query_mysql_oktober);

                                            //november
                                            $query_mysql_november = mysqli_query($host, "SELECT * FROM history where bulan like '%november%' and tahun = '$tahun'");
                                            $november = mysqli_num_rows($query_mysql_november);
                                            $november_data = mysqli_fetch_array($query_mysql_november);

                                            //desember
                                            $query_mysql_desember = mysqli_query($host, "SELECT * FROM history where bulan like '%december%' and tahun = '$tahun'");
                                            $desember = mysqli_num_rows($query_mysql_desember);
                                            $desember_data = mysqli_fetch_array($query_mysql_desember);

                                            $query_mysql_teradopsi = mysqli_query($host,"SELECT* FROM history");
                                            $jumlah = mysqli_num_rows($query_mysql_teradopsi);

                                            $query_mysql_belum = mysqli_query($host,"SELECT* FROM table_anak where status_adopsi = 'belum diadopsi'");
                                            $query_mysql_telah = mysqli_query($host,"SELECT* FROM table_anak where status_adopsi = 'diadopsi'");
                                            $jumlah1 = mysqli_num_rows($query_mysql_belum);
                                            $data_anak1 = mysqli_fetch_array($query_mysql_belum);
                                            $data_anak2 = mysqli_fetch_array($query_mysql_telah);

                                            ?>
                                            <td><a href="laporan_adopsi.php?bulan=<?php echo $januari_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($januari > 0) {
                                                echo $januari; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- januari -->
                                            <td><a href="laporan_adopsi.php?bulan=<?php echo $febuari_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($febuari > 0) {
                                                echo $febuari; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- febuari -->
                                            <td><a href="laporan_adopsi.php?bulan=<?php echo $maret_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($maret > 0) {
                                                echo $maret; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- maret -->
                                            <td><a href="laporan_adopsi.php?bulan=<?php echo $april_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($april > 0) {
                                                echo $april; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- april -->
                                            <td><a href="laporan_adopsi.php?bulan=<?php echo $mei_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($mei > 0) {
                                                echo $mei; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- mei -->


                                            <td><a href="laporan_adopsi.php?bulan=<?php echo $juni_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($juni > 0) {
                                                echo $juni; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- Juni -->



                                            <td><a href="laporan_adopsi.php?bulan=<?php echo $juli_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($juli > 0) {
                                                echo $juli; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- juli -->
                                            <td><a href="laporan_adopsi.php?bulan=<?php echo $agustus_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($agustus > 0) {
                                                echo $agustus; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- agustus -->
                                            <td><a href="laporan_adopsi.php?bulan=<?php echo $september_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($september > 0) {
                                                echo $september; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- september -->
                                            <td><a href="laporan_adopsi.php?bulan=<?php echo $oktober_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($oktober > 0) {
                                                echo $oktober; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- oktober -->
                                            <td><a href="laporan_adopsi.php?bulan=<?php echo $november_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($november > 0) {
                                                echo $november; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- november -->
                                             <td><a href="laporan_adopsi.php?bulan=<?php echo $desember_data['bulan']; ?>" class="btn btn-sm btn-outline-primary">
                                            <?php
                                            
                                            if ($desember > 0) {
                                                echo $desember; 
                                            } else {
                                                echo "kosong";
                                            }
                                             
                                             ?></a></td><!-- desember -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>Jumlah Anak Yang Telah Diadopsi</th>
                                            <th>Jumlah Anak Yang Belum Diadopsi</th>
                                            <th colspan="2">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <td><?php echo $jumlah; ?></td>
                                            <td><?php echo $jumlah1; ?></td>
                                            <td><a href="proses/pdf_anak_teradopsi.php" class="btn btn-sm btn-outline-success">Report PDF Anak Teradopsi</a></td>
                                            <td><a href="proses/pdf_anak_belum_diadopsi.php" class="btn btn-sm btn-outline-secondary">Report PDF Anak Belum Teradopsi</a></td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                  
                    </div>
                </div>
            </div>

          
<?php

include 'template/footer.php'

?>