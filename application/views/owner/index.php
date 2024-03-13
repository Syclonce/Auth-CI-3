<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   '1',
		'2',
		'3',
		'4',
		'5',
		'6',
		'7',
		'8',
		'9',
		'10',
		'11',
		'12'
	);
	$pecahkan = explode('-', $tanggal);

	// variabel pecahkan 1 = tanggal
	// variabel pecahkan 0 = bulan
	// variabel pecahkan 2 = tahun

	return $pecahkan[2] . '-' . $bulan[ (int)$pecahkan[1] ] . '-' . $pecahkan[0];
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    

    <div class="row">
        <div class="col-lg">
            <a href="<?= base_url() ?>owner/tambahbarang" class="btn btn-primary mb-3">Add New Barang</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User Pinjam</th>
                                <th scope="col">Tgl Pinjam</th>
                                <th scope="col">Tempo</th>
                                <th scope="col">Status</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php  foreach ($pinjam as $p): ?>
                            
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $p->usr_input ?></td>
                                <td><?= tgl_indo($p->tgl_pinjam) ?></td>
                                <td><?= date($p->tempo) ?></td>
                                <td>
                                    <?php if($p->status == 'Pinjam'): ?>
                                        <span class="badge badge-primary">
                                    <?php else: ?>
                                        <span class="badge badge-success">
                                    <?php endif; ?>
                                        <?= $p->status ?>
                                    </span>
                                </td>
                                <td>
                                    <?php if($p->ket == ''): ?>
                                    <i> (Tidak diisi) </i>
                                    <?php else: ?>
                                    <?= $p->ket ?>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="" class="badge badge-success">edit</a>
                                    <a href="<?= base_url() ?>owner/proses_hapus/<?= $p->id ?>" class="badge badge-danger">delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            
                            
                            <?php endforeach; ?>
                        </tbody>
                    </table>
        </div>
    </div>
           
            

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 