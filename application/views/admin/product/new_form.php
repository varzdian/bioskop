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
						<a href="<?php echo site_url('admin/film/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/film/save') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="name">Judul Film*</label>
								<input class="form-control"
								 type="text" name="judul_film" placeholder="Judul Film" />
							
							</div>

							<div class="form-group">
								<label for="price">Tanggal Tayang*</label>
								<input class="form-control"
								 type="date" name="tgl_tayang" placeholder="Tanggal Tayang" />
								
							</div>


							<div class="form-group">
								<label for="name">Sinopsis</label>
								<input class="form-control" type="text" name="sinopsis" min="0" placeholder="Sinopsis" />
															
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
