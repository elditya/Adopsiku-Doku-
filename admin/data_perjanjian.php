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
                                <table  class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Adopter</th>
                                            <th>Nama Panti</th>
                                            <th>Hari</th>
                                            <th>Jam</th>
                                            <th>Tanggal Perjanjian</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <?php

                                        include "../koneksi.php";

                                        $query_mysql = mysqli_query($host, "SELECT * FROM table_janji");

                                        while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                        ?>
                                    <tbody>
                                        <td><?php echo $data['id_janji']; ?></td>
                                        <td><?php echo $data['nama_adopter']; ?></td>
                                        <td><?php echo $data['nama_panti']; ?></td>
                                        <td><?php echo $data['hari']; ?></td>
                                        <td><?php echo $data['jam']; ?></td>
                                        <td><?php echo $data['tanggal']; ?></td>
                                        <td>
                                        <?php 
                                          if ($data['status'] == 'belum diterima') { ?>
                                              <button class="btn btn-outline-danger" >Perjanjian Belum diterima</button>
                                            <?php } 
                                            elseif ($data['status'] == 'diterima') { ?>
                                             <button class="btn btn-outline-info" >Perjanjian Sudah diterima</button>
                                            <?php } 
                                            else {?>
                                              <a class="btn btn-outline-info">Status Pengajuan Belum diterima</a>
                                            <?php } ?>
                                        </td>

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