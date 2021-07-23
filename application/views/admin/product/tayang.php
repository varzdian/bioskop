<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/tayang/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/tayang/save') ?>" method="post" enctype="multipart/form-data" >
						<div class="form-group">
								<label for="name">Bioskop*</label>
								 <select name="bioskop" class="form-control">
								 	<?php foreach ($bioskops as $bioskop): ?>
										<option value="<?php echo $bioskop->kd_bioskop ?>"><?php echo $bioskop->nama_bioskop ?></option>
									<?php endforeach; ?>	
								 </select>
							</div>
							<div class="form-group">
								<label for="name">Judul Film*</label>

								<select name="judul_film" class="form-control">
								 	<?php foreach ($films as $film): ?>
										<option value="<?php echo $film->judul_film ?>"><?php echo $film->judul_film ?></option>
									<?php endforeach; ?>	
								</select> 
							</div>
							<div class="form-group">
								<label for="price">Tanggal dan Waktu Tayang*</label>
								<input class="form-control"
								 type="datetime-local" name="tgl_tayang" />
							</div>
							<div class="form-group">
								<label for="name">jumlah Kursi</label>
								<input class="form-control"
								 type="number" name="jml_kursi" min="0" placeholder="Jumlah Kursi" />		
							</div>


							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
