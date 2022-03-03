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
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        include "../koneksi.php";

                                        $query_mysql = mysqli_query($host, "SELECT * FROM tahapan1");
                                        $no = 1;

                                        while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                        ?>
                                        <td><?php echo $data['id_th1']; ?></td>
                                        <td><?php echo $data['nama_adopter']; ?></td>
                                        <td><?php echo $data['nama_panti']; ?></td>
                                        <td><?php echo $data['nama_anak']; ?></td>
                                        <td><a href="lihat_laporan.php?kode=<?php echo $data['kode']; ?>"  class="btn btn-sm btn-outline-primary">Liat Detail Tahapan</a></td>
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