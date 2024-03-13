<!-- Begin Page Content -->
<div class="container-fluid">
<form action="<?= base_url() ?>owner/proses_tambah" name="myForm" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex">
                <a href="<?= base_url() ?>owner" class="btn btn-md btn-circle btn-primary">
                    <i class="fas fa-arrow-left"></i>
                </a>
                &nbsp;
                <h1 class="h2 mb-0 text-gray-800">Peminjaman Barang</h1>
            </div>
            <button type="submit" class="btn btn-primary btn-md btn-icon-split">
                <span class="text text-white">Simpan Data</span>
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            </button>
        </div>



        <!-- content -->
        <div class="row">

            <div class="col-lg-6">
                <div class="card border-bottom-primary shadow mb-4">
                    <div class="card-header py-3 bg-primary">
                        <h6 class="m-0 font-weight-bold text-white">Form Peminjaman</h6>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label>ID Peminjaman</label>
                            <input type="text" name="idpinjam" class="form-control" value="<?=  $user['name']; ?>" readonly>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Pinjam</label>
                                        <input type="text" name="tglpinjam"  class="form-control" readonly value="<?= $tglsekarang ?>" >
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Tanggal Kembali</label>
                                        <input type="date" name="tglkembali"  class="form-control" value="<?= date('d-m-Y'); ?>">
                                    </div>
                                </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Keterangan Lainnya</label>
                                    <textarea name="ket" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card border-bottom-primary shadow mb-4">
                    <div class="card-header py-3 bg-primary">
                        <h6 class="m-0 font-weight-bold text-white">Anggota</h6>
                    </div>
                    <div class="card-body">


                        <div class="row">
                            <div class="col-lg-3">
                                <center>
                                    <img style="border-radius: 5px;"
                                    src="<?= base_url('assets/img/profile/') . $user['image']; ?>" id="preview" width="75"
                                        maxheight="300">
                                </center>
                            </div>
                            <div class="col-lg">
                                <p id="namaL">Name : <?= $user['name']; ?></p>
                                <!-- Divider -->
                                <hr class="sidebar-divider">
                                <p id="jk">Email : <?= $user['email']; ?></p>
                                <!-- Divider -->
                                <hr class="sidebar-divider">
                                <p id="umur">Member since  : <?= date('d F Y', $user['date_created']); ?></p>
                                <!-- Divider -->
                                <hr class="sidebar-divider">
                            </div>
                        </div>

                    </div>
                </div>
            </div>


    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 


<script src="<?= base_url(); ?>assets/js/peminjaman.js"></script>
<script src="<?= base_url(); ?>assets/js/validasi/formpeminjaman.js"></script>
