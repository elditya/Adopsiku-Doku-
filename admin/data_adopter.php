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
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Telepon</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Foto Profil</th>
                                        </tr>
                                    </thead>
                                    <?php

                                        include "../koneksi.php";

                                        $query_mysql = mysqli_query($host, "SELECT * FROM table_adopter");

                                        while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                        ?>
                                    <tbody>
                                        <td><?php echo $data['id_adopter']; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['telepon']; ?></td>
                                        <td><?php echo $data['TTL']; ?></td>
                                        <td><img src="<?php echo '../public/file/adopter/profil/'.$data['foto']; ?>" width="100px" height="100px" alt=""></td>
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