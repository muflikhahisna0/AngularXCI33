<?php $this->load->view('layout/header'); ?>

<body ng-app="AppAdmin">
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<?php $this->load->view('layout/navbar'); ?>

		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_sidebar.html -->
			<?php $this->load->view('layout/sidebar'); ?>


			<!-- partial -->
			<div class="main-panel">
				<!-- content -->
				<ng-view>

				</ng-view>


				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<?php $this->load->view('layout/footer'); ?>


				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- jQuery -->
	<script src="<?php echo $js_url; ?>plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo $js_url; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo $js_url; ?>dist/js/adminlte.min.js"></script>
	<!-- page script -->
	<script src="<?php echo $js_url; ?>dist/js/angular/angular.min.js"></script>
	<script src="<?php echo $js_url; ?>dist/js/angular/angular-route.min.js"></script>
	<script src="<?php echo $js_url; ?>dist/js/angular/angular-sanitize.min.js"></script>
	<script type="text/javascript">
		var baseUrl = "<?php echo site_url(); ?>";
		var dataApiUrl = "<?php echo site_url('api/'); ?>";
		var baseViewApiUrl = "<?php echo site_url('api/view/') . '/'; ?>";
	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script src="<?php echo $js_url; ?>app/app.js?<?php echo time(); ?>"></script>
	<script src="<?php echo $js_url; ?>app/<?php echo $ang_script ?>/app-route.js?<?php echo time(); ?>"></script>
	<script src="<?php echo $js_url; ?>app/<?php echo $ang_script ?>/app-controller.js?<?php echo time(); ?>"></script>
	<script src="<?php echo $js_url; ?>app/<?php echo $ang_script ?>/app-service.js?<?php echo time(); ?>"></script>
	<!-- plugins:js -->

	<?php $this->load->view('layout/plugin'); ?>


</body>

</html>