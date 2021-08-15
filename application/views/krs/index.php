
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelompok Rencana Studi</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href=<?= base_url('krs/tambah_krs'); ?> class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data</a>
            <!-- <?php print_r($tampilkrs); ?> -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Matkul</th>
                            <th>Nama Matkul</th>
                            <th>Kelas</th>
                            <th>Semester</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                       $no = 1;
                       foreach ($tampil as $tm): ?>
                       <tr>
                         <td><?= $no++ ?></td>
                         <td><?= $tm['kode_matkul']; ?></td>
                         <td><?= $tm['nama_matkul'];	?></td>
                         <td><?= $tm['kelas']; ?></td>
                         <td><?= $tm['semester']; ?></td>
                         <td width="20px">
                            <a href="<?= base_url() ?>krs/hapuskrs/<?= $tm['id']; ?>">
                                <?php echo('<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

