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
                                            <th>Nama Adopter</th>
                                            <th>Nama Panti</th>
                                            <th>Nama anak</th>
                                            <th>Hari</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Tanggal Tahapan Selesai</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        include "../koneksi.php";

                                        $bulan = $_GET['bulan'];
                                        $query_mysql = mysqli_query($host, "SELECT * FROM history where bulan = '$bulan'");
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
                                        <td><a href="detail_anak.php?nama_anak=<?php echo $data['nama_anak']; ?>" class="btn btn-sm btn-outline-primary">Liat Data Anak</a></td>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <?php

include 'template/footer.php'

?>