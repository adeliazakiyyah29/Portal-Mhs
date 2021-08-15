
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kelompok Hasil Studi</h1>
                    </div>
                       <div class="card shadow mb-4">
                        <div class="card-body">
                        	<!-- <?php print_r($tampil); ?> -->
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Matkul</th>
                                            <th>Nama Matkul</th>
                                            <th>Kelas</th>
                                            <th>Semester</th>
                                            <th>Nilai</th>
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
                                                <td><?php

                                                if($tm['nilai'] >= 85){
                                                    echo "A";
                                                 }else if($tm['nilai'] <= 80){
                                                    echo "A-";
                                                 }else if($tm['nilai'] <= 75){
                                                    echo "B+";
                                                 }else if($tm['nilai'] <= 70){
                                                    echo "B";
                                                 }else if($tm['nilai'] <= 65){
                                                    echo "B-";
                                                 }else if($tm['nilai'] <= 60){
                                                    echo "C+";
                                                 }else if($tm['nilai'] <= 55){
                                                    echo "c";
                                                 }else if($tm['nilai'] <= 50){
                                                    echo "c-";
                                                 }else if($tm['nilai'] <= 40){
                                                    echo "D";
                                                 }else{
                                                    echo "E";
                                                 }
                                                 ?></td>
                                    		</tr>
                                    	<?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           