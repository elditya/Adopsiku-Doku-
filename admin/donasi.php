<?php

include 'template/header.php'

?>


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                            <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pendonasi</th>
                                            <th>Nama Panti</th>
                                            <th>Nominal Donasi</th>
                                            <th>Tanggal pengajuan</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Bukti Pembayaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        include "../koneksi.php";

                                        $query_mysql = mysqli_query($host, "SELECT * FROM donasi");
                                        $no = 1;

                                        while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                        ?>
                                        <td><?php echo $no ; ?></td>
                                        <td><?php echo $data['pendonasi']; ?></td>
                                        <td><?php echo $data['nama_panti']; ?></td>
                                        <td><?php echo $data['nominal']; ?></td>
                                        <td><?php echo $data['tgl_pengajuan']; ?></td>
                                        <td><?php echo $data['tgl_selesai']; ?></td>
                                        <td><img src="<?php echo '../images/file_donasi/'.$data['bukti_struk']; ?>" width="100px" height="100px"></td>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div> 
                <?php

include 'template/footer.php'

?>