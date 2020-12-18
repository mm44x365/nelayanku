<?php
check_session('admin');
?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= dashboardAdmin('totalUser', true) ?></h3>
                        <p>Total Karyawan Terdaftar</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <!-- <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>
                            asd
                        </h3>
                        <p>Total Subtitle Diupload</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-upload"></i>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- /.content -->