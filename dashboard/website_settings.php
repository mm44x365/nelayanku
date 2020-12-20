<?php
$page = "Pengaturan Website";
session_start();

//Load file config
require '../config.php';
require '../view/dashboard_header.php';

check_session('admin');

if (isset($_POST['submit'])) {
    $title = $connect->real_escape_string(trim(filter($_POST['title'])));
    $slogan = $connect->real_escape_string(trim(filter($_POST['slogan'])));
    $description = $connect->real_escape_string(trim(filter($_POST['description'])));

    //Jika from username, dan password kosong maka proses login gagal
    if (!$title || !$slogan || !$description) {
        $_SESSION['notification'] = array('alert' => 'error', 'title' => 'Gagal', 'message' => 'Mohon isi semua form.');
    } elseif ($connect->query("UPDATE web_config SET title = '$title', slogan = '$slogan', description = '$description' WHERE id = '1'") == true) {
        $_SESSION['notification'] = array('alert' => 'success', 'title' => 'Berhasil', 'message' => 'Data berhasil diubah!');
    } else {
        //Jika username admin tidak ditemukan
        $_SESSION['notification'] = array('alert' => 'error', 'title' => 'Gagal', 'message' => 'Fatal Error!');
    }
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><i class="nav-icon fas fa-users"></i> <?= $page ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $page ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Website</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form" action="" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Judul Website</label>
                                                    <input type="text" name="title" class="form-control" value="<?= $web_info['title'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Slogan Website</label>
                                                    <input type="text" name="slogan" class="form-control" value="<?= $web_info['slogan'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi Website</label>
                                                    <textarea class="form-control" name="description"><?= $web_info['description'] ?></textarea>
                                                </div>
                                                <div class="form-group float-right">
                                                    <button type="submit" name="submit" class="btn btn-sm btn-success"><i class="fas fa-paper-plane btn-xs"></i> Kirim</button>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6">

                                            </div> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
require '../view/dashboard_footer.php';
?>