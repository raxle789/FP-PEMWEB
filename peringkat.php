<?php
    include_once('koneksi.php');
    $sql = "SELECT * FROM data_pendaftar ORDER BY rerata DESC";
    $res = $mysqli->query($sql);
?>

<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Peringkat</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item active">Peringkat</li>
		</ol>
        <div class="container border border-1 rounded-4 p-4 mb-3">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead class="table-primary">
                    <tr>
                        <th>NO</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Provinsi</th>
                        <th>Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Rerata</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $counter = 1;
                        if($res->num_rows > 0){
                            $id = 3;
                            while($row = $res->fetch_assoc()){
                                echo(
                                    "<tr class=item-siswa>".
                                    "<td>".$counter++."</td>".
                                    "<td>".$row['nisn']."</td>".
                                    "<td class=nama-siswa>".$row['nama']."</td>".
                                    "<td>".$row['provinsi']."</td>".
                                    "<td>".$row['kabupaten']."</td>".
                                    "<td>".$row['kecamatan']."</td>".
                                    "<td>".$row['desa']."</td>".
                                    "<td>".$row['rerata']."</td>".
                                    "</tr>"
                                );
                            }
                        }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
	</div>
</main>

<link rel="stylesheet" href="style2.css" />

<!-- Search JavaScript-->
<script src="jquery.min.js"></script>
<script src="bootstrap.bundle.min.js"></script>
<script src="jquery.dataTables.min.js"></script>
<script src="dataTables.bootstrap4.min.js"></script>
<script src="datatables-demo.js"></script>

<!-- Page level custom scripts -->
<!-- <script src="script2.js"></script> -->
