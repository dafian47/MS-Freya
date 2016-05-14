<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-1/bootstrap.css?1422792965" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-1/materialadmin.css?1425466319" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-1/font-awesome.min.css?1422529194" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-1/material-design-iconic-font.min.css?1421434286" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme-1/libs/rickshaw/rickshaw.css?1422792967" />
    <link type="text/css" rel="stylesheet" href=".<?php echo base_url(); ?>assets/css/theme-1/libs/morris/morris.core.css?1420463396" />
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
    <![endif]-->
</head>
<body class="menubar-hoverable header-fixed ">

	<!-- BEGIN LOGIN SECTION -->
	<section class="section-account">
		<div class="img-backdrop" style="background-image: url('<?php echo base_url(); ?>assets/img/img15.jpg')"></div>
		<div class="spacer"></div>

		<!-- BEGIN FLASH DATA -->
        <?php if($this->session->flashdata('fail')){; ?>
            <div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo $this->session->flashdata('fail'); ?></strong> .
            </div>
        <?php } ?>
        <!-- END FLASH DATA -->

		<div class="card contain-sm style-transparent">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-6">
						<br/>
						<span class="text-lg text-bold text-primary">Login User</span>
						<br/><br/>
						<form class="form floating-label" action="<?php echo base_url(); ?>login/checkLogin" accept-charset="utf-8" method="post">
							<div class="form-group">
								<input type="text" class="form-control" id="username" name="username">
								<label for="username">Username</label>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" name="password">
								<label for="password">Password</label>
							</div>
							<br/>
							<div class="row">
								<div class="col-xs-6 text-left">
									<button class="btn btn-primary btn-raised" type="submit">Enter</button>
								</div><!--end .col -->
							</div><!--end .row -->
						</form>
					</div><!--end .col -->
				</div><!--end .card -->
			</section>
			<!-- END LOGIN SECTION -->

			<!-- BEGIN JAVASCRIPT -->
			<script src="<?php echo base_url(); ?>assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/bootstrap/bootstrap.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/spin.js/spin.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/autosize/jquery.autosize.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/moment/moment.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/flot/jquery.flot.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/flot/jquery.flot.time.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/flot/jquery.flot.resize.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/flot/jquery.flot.orderBars.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/flot/jquery.flot.pie.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/flot/curvedLines.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/jquery-knob/jquery.knob.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/sparkline/jquery.sparkline.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/d3/d3.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/d3/d3.v3.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/libs/rickshaw/rickshaw.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/core/source/App.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/core/source/AppNavigation.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/core/source/AppOffcanvas.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/core/source/AppCard.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/core/source/AppForm.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/core/source/AppNavSearch.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/core/source/AppVendor.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/core/demo/Demo.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/core/demo/DemoDashboard.js"></script>
			<!-- END JAVASCRIPT -->	

		</body>
	</html>
