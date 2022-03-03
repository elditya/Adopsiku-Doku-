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
                                            <th>Nama Panti</th>
                                            <th>Name Event</th>
                                            <th>Judul Event</th>
                                            <th>Tanggal Event</th>
                                            <th>Isi Event</th>
                                            <th>Deskripsi Event</th>
                                            <th>Gambar Event</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        include "../koneksi.php";

                                        $query_mysql = mysqli_query($host, "SELECT * FROM event");
                                        $no = 1;

                                        while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                        ?>
                                        <td><?php echo $no++ ; ?></td>
                                        <td><?php echo $data['nama_panti']?></td>
                                        <td><?php echo $data['nama_event'] ?></td>
                                          <td><?php echo $data['judul_event'] ?></td>
                                          <td><?php echo $data['tanggal_event'] ?></td>
                                          <td><?php echo $data['isi_event'] ?></td>
                                          <td><?php echo $data['deskripsi_event'] ?></td>
                                          <td><img src="<?php echo '../images/event/'.$data['gambar']; ?>"  width ="300px" height="200px" /></td>
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