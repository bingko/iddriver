<!DOCTYPE html>
<html lang="en">	
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ID DRIVER ADMIN SYSTEM</title>

    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>css/admin/metisMenu.min.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>css/admin/sb-admin-2.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>fonts/thai/font_thai.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>css/fileinput.min.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>js/jquery.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/admin/metisMenu.min.js"></script>
    <script src="<?php echo base_url()?>js/admin/raphael-min.js"></script>
    <script src="<?php echo base_url()?>js/admin/sb-admin-2.js"></script>
	<script src="<?php echo base_url()?>js/fileinput.js"></script>
</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url()?>">ID DRIVER</a>
            </div>


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo site_url()?>/admin"><i class="fa fa-dashboard fa-fw"></i> หน้าหลัก</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()?>/admin/news"><i class="fa fa-bar-chart-o fa-fw"></i>ข่าวสาร<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()?>/admin/article"><i class="fa fa-bar-chart-o fa-fw"></i>บทความ<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()?>/admin/course"><i class="fa fa-edit fa-fw"></i>หลักสูตร</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url()?>/admin/student"><i class="fa fa-edit fa-fw"></i>นักเรียน</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file-image-o"></i> จัดการรูปภาพ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url()?>/admin/slide">รูปสไลด์</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url()?>/admin/album">อัลบั้ม</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url()?>/admin/gen">ทำเนียบรุ่น</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php $this->load->view($page)?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

</body>

</html>
