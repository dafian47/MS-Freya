<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
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
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/theme-1/bootstrap.css?1422792965" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/theme-1/materialadmin.css?1425466319" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/theme-1/font-awesome.min.css?1422529194" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/theme-1/material-design-iconic-font.min.css?1421434286" />
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/theme-1/libs/rickshaw/rickshaw.css?1422792967" />
        <link type="text/css" rel="stylesheet" href=".<?php echo base_url(); ?>/assets/css/theme-1/libs/morris/morris.core.css?1420463396" />
        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
        <script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
        <![endif]-->
</head>
<body class="menubar-hoverable header-fixed">

    <!-- BEGIN HEADER-->
    <header id="header" >
        <div class="header">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="headerbar-left">
                <ul class="header-nav header-nav-options">
                    <li>
                        <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="header-nav-brand" >
                        <div class="brand-holder">
                            <a href="<?php echo base_url();?>dashboard">
                                <span class="text-lg text-bold text-primary">MS&nbsp;Freya</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="headerbar-right">
                <ul class="header-nav header-nav-options">
                    
                </ul><!--end .header-nav-options -->
                <ul class="header-nav header-nav-profile">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                            <img src="<?php echo base_url(); ?>assets/img/avatar1.jpg?1403934956" alt="" />
                            <span class="profile-info">
                                Dafian
                                <small>Administrator</small>
                            </span>
                        </a>
                        <ul class="dropdown-menu animation-dock">
                            <li class="dropdown-header">Config</li>
                            <li><a href="<?php echo base_url();?>user/profile">My profile</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url();?>user/lock"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
                            <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                        </ul><!--end .dropdown-menu -->
                    </li><!--end .dropdown -->
                </ul><!--end .header-nav-profile -->
                <ul class="header-nav header-nav-toggle">
                    <li>
                        <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>
                    </li>
                </ul><!--end .header-nav-toggle -->
            </div><!--end #header-navbar-collapse -->
        </div>
    </header>
    <!-- END HEADER-->

    <!-- BEGIN MENUBAR-->
    <div id="menubar" class="menubar-inverse ">
        <div class="menubar-fixed-panel">
            <div>
                <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="expanded">
                <a href="<?php echo base_url(); ?>dashboard">
                    <span class="text-lg text-bold text-primary ">MS&nbsp;Freya</span>
                </a>
            </div>
        </div>
        <div class="menubar-scroll-panel">

            <!-- BEGIN MAIN MENU -->
            <ul id="main-menu" class="gui-controls">

                <!-- BEGIN DASHBOARD -->
                <li>
                    <a href="<?php echo base_url(); ?>dashboard" class="active">
                        <div class="gui-icon"><i class="md md-home"></i></div>
                        <span class="title">Dashboard</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN SURVEYOR -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="md md-assignment-ind"></i></div>
                        <span class="title">Surveyor</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="<?php echo base_url(); ?>surveyor/add" ><span class="title">Tambah Surveyor</span></a></li>
                        <li><a href="<?php echo base_url(); ?>surveyor/" ><span class="title">Daftar Surveyor</span></a></li>
                    </ul><!--end /submenu -->
                </li>
                <!-- END SURVEYOR -->

                <!-- BEGIN CUSTOMER -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="md md-people"></i></div>
                        <span class="title">Data Langganan</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="<?php echo base_url(); ?>customer/statistik" ><span class="title">Statistik Langganan</span></a></li>
                        <li><a href="<?php echo base_url(); ?>customer/" ><span class="title">Daftar Langganan</span></a></li>
                    </ul><!--end /submenu -->
                </li>
                <!-- END CUSTOMER -->

                <!-- BEGIN REQUEST -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="md md-directions-car"></i></div>
                        <span class="title">Data Permohonan</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="<?php echo base_url(); ?>request/add" ><span class="title">Tambah Permohonan</span></a></li>
                        <li><a href="<?php echo base_url(); ?>request/" ><span class="title">Daftar Permohonan</span></a></li>
                    </ul><!--end /submenu -->
                </li>
                <!-- END REQUEST -->

                <!-- BEGIN MASTER -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="md md-grade"></i></div>
                        <span class="title">Data Master</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="<?php echo base_url(); ?>master/category" ><span class="title">Data Kategori</span></a></li>
                        <li><a href="<?php echo base_url(); ?>master/code" ><span class="title">Data Sub Kategori</span></a></li>
                    </ul><!--end /submenu -->
                </li>
                <!-- END MASTER -->

                <!-- BEGIN USER -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="md md-lock"></i></div>
                        <span class="title">User</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="<?php echo base_url(); ?>user/add" ><span class="title">Add User</span></a></li>
                        <li><a href="<?php echo base_url(); ?>user/" ><span class="title">User List</span></a></li>
                    </ul><!--end /submenu -->
                </li>
                <!-- END USER -->

            </ul><!--end .main-menu -->
            <!-- END MAIN MENU -->

            <div class="menubar-foot-panel">
                <small class="no-linebreak hidden-folded">
                    <span class="opacity-75">Copyright &copy; 2016</span> <strong>Dafian</strong>
                </small>
            </div>
        </div><!--end .menubar-scroll-panel-->
    </div><!--end #menubar-->
    <!-- END MENUBAR -->