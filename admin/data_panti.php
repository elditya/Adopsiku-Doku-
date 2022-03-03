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
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Nama Panti</th>
                                            <th>Alamat Panti</th>
                                            <th>Nomor Telepon</th>
                                            <th>Foto Panti</th>
                                            <th>Foto Profil</th>
                                        </tr>
                                    </thead>
                                    <?php

                                        include "../koneksi.php";

                                        $query_mysql = mysqli_query($host, "SELECT * FROM table_panti");

                                        while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                        ?>
                                    <tbody>
                                        <td><?php echo $no++ ; ?></td>
                                        <td><?php echo $data['id_panti']; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['nama_panti']; ?></td>
                                        <td><?php echo $data['alamat_panti']; ?></td>
                                        <td><?php echo $data['nomor_telepon']; ?></td>
                                        <td><img src="<?php echo '../public/file/panti/'.$data['foto_panti']; ?>" width="150px" height="100px" alt=""></td>
                                        <td><img src="<?php echo '../public/file/panti/'.$data['foto_pf']; ?>" width="150px" height="100px" alt=""></td>
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