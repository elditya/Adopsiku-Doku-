<?php

include 'template/header.php'

?>


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <body>
                        <div class="container emp-profile">

                            <form action="proses/arsip.php" method="post">
                                            

                                <h4>Data Archive</h4>
                                <br>
                                <strong >Masukan Tahun data yang akan di arsipkan : <input type="text" name="tahun" class=""></strong>
                                <br>
                                <br>
                                <input type="submit" value="Arsipkan" class="btn btn-success btn-user btn-block col-sm-2 mb-3 mb-sm-0 " > 
                            </form>
                        </div>    

                            <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Data Yang Telah di arsip</strong>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                        <th>No</th>
                                                        <th>Nama Adopter</th>
                                                        <th>Nama Panti</th>
                                                        <th>Nama anak</th>
                                                        <th>hari</th>
                                                        <th>Bulan</th>
                                                        <th>tahun</th>
                                                        <th>Tanggal Tahapan Selesai</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php

                                                    include "../koneksi.php";


                                                    $query_mysql = mysqli_query($host, "SELECT * FROM archive");
                                                    $no = 1;

                                                    while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                                    ?>
                                                    <td><?php echo$no++ ; ?></td>
                                                    <td><?php echo $data['nama_adopter']; ?></td>
                                                    <td><?php echo $data['nama_panti']; ?></td>
                                                    <td><?php echo $data['nama_anak']; ?></td>
                                                    <td><?php echo $data['hari']; ?></td>
                                                    <td><?php echo $data['bulan']; ?></td>
                                                    <td><?php echo $data['tahun']; ?></td>
                                                    <td><?php echo $data['tgl_selesai']; ?></td>
                                                </tbody>
                                                <?php } ?>
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