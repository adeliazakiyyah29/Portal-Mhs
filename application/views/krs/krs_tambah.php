
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">TAMBAH DATA KRS</h1>
	</div>
	<div class="card shadow mb-4">
		<div class="card-body">

			<form method="POST" action="<?= base_url('krs/aksi_tambah_krs') ?>">
				<div class="form-group ">
					<label for="exampleFormControlInput1">Kelas</label>
					<input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan kelas..">
				</div>

				<div class="form-group">
					<label for="exampleFormControlSelect1">Kode Matkul</label>
					<select class="form-control" id="kode_matkul" name="kode_matkul">
						<option disabled selected> Pilih Matkul - Sks - Semester</option>
						<?php 
						foreach ($tampilkodematkul as $key => $value): ?>
						<option value="<?= $value['kode_matkul'] ?>"><?= $value['nama_matkul'] ?> - <?= $value['sks'] ?> - <?= $value['semester'] ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>

	</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

