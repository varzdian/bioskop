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
						<a href="<?php echo site_url('admin/bioskop/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/bioskop/save') ?>" method="post" enctype="multipart/form-data" >
							
							<div class="form-group">
								<label for="name">nama bioskop*</label>
								<input class="form-control"
								 type="text" name="nama_bioskop" placeholder="Nama Bioskop" />
							</div>

							<div class="form-group">
								<label for="price">alamat_bioskop*</label>
								<input class="form-control"
								 type="text" name="alamat_bioskop" placeholder="Alamat Bioskop" />
							</div>


							<div class="form-group">
								<label for="name">kota</label>
								<input class="form-control"
								 type="text" name="kota" placeholder="Kota" />	
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
