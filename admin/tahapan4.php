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
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Bukti</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        include "../koneksi.php";

                                        $query_mysql = mysqli_query($host, "SELECT * FROM tahapan4");
                                        $no = 1;

                                        while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                        ?>
                                        <td><?php echo$data['id_th4']; ?></td>
                                        <td><?php echo $data['nama_adopter']; ?></td>
                                        <td><?php echo $data['nama_panti']; ?></td>
                                        <td><?php echo $data['nama_anak']; ?></td>
                                        <td><?php echo $data['hari']; ?></td>
                                        <td><?php echo $data['tgl']; ?></td>
                                        <td><?php echo $data['jam']; ?></td>
                                        <td><img src="<?php echo '../public/file/tahapan/'.$data['tahapan4']; ?>" width="100px" height="100px" alt=""></td>
                                        <td><a href="../tahapan/hapus_tahapan4.php?id_th4=<?php echo $data['id_th4']; ?>" class="btn btn-sm btn-outline-danger">Hapus</a></td>
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