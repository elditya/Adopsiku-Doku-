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
                                <table class="table table-striped table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>Nama Anak</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Umur Anak</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Hobby</th>
                                            <th>Kesehatan</th>
                                            <th>Silsilah Keluarga</th>
                                            <th>Foto Anak</th>
                                        </tr>
                                    </thead>
                                    <?php

                                        include "../koneksi.php";

                                        $query_mysql = mysqli_query($host, "SELECT * FROM table_anak");

                                        while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                        ?>
                                    <tbody>
                                        <td><?php echo $data['nama_anak']; ?></td>
                                        <td><?php echo $data['tl']; ?></td>
                                        <td><?php echo $data['ttl']; ?></td>
                                        <td><?php echo $data['umur_anak']; ?></td>
                                        <td><?php echo $data['jk']; ?></td>
                                        <td><?php echo $data['agama']; ?></td>
                                        <td><?php echo $data['hobby']; ?></td>
                                        <td><?php echo $data['kesehatan']; ?></td>
                                        <td><img src="<?php echo '../public/file/anak/'.$data['sk']; ?>" alt=""></td>
                                        <td><img src="<?php echo '../public/file/anak/'.$data['foto_anak']; ?>" alt="" width="200px" height="150px"></td>
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