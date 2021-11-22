<?php
    require_once('connect.php');
    require_once('header.php');    
?>
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Data Pengguna
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Pengguna</a></li>
            <li class="active">Data Pengguna</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Pengguna</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>

                                <?php
                                    //Cek tabel user
                                    $result = mysqli_query($conn, "select * from tb_user");

                                    if(mysqli_num_rows($result) > 0) {
                                        while ($data = mysqli_fetch_assoc($result)) {
                                            echo '<tr>
                                                <td>'.$data['id_user'].'</td>
                                                <td>'.$data['username'].'</td>
                                                <td><span class="badge bg-yellow">'.$data['status'].'</span></td>
                                                <td><span class="label label-success">'.$data['level'].'</span></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="#">
                                                            <button type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</button>
                                                        </a>
                                                        <a href="#">
                                                            <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>';
                                        }
                                    } else {
                                        echo '<tr>
                                            <td colspan="5" class="text-center">Data Tidak Ada</td>
                                        </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?php
    require_once('footer.php');
?>