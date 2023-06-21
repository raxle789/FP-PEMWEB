<?php
    include_once('koneksi.php');
    $sql = "SELECT COUNT(*) as total FROM data_pendaftar";
    $res = $mysqli->query($sql);
	$total = $res->fetch_assoc();
?>

<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Beranda</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item active">Beranda</li>
		</ol>
		<div class="row">
			<div class="col-xl-3 col-md-6">
				<div class="card bg-primary text-white mb-4">
					<div class="card-body">
						<h2><?php echo $total['total'] ?></h2>
						<p>Pendaftar</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6">
				<div class="card bg-primary text-white mb-4">
					<div class="card-body">
						<h2>250</h2>
						<p>Kuota Penerimaan</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6">
				<div class="card bg-primary text-white mb-4">
					<div class="card-body">
						<h2>A</h2>
						<p>Terakreditasi</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
