<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang quản lý</title>
    <link rel="icon" href="views/images.png" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="public/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="public/css//morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	table, th, td{
    		text-align: center;
    	}
    	p.validate{
    		color: red;
    	}
    	.modal-footer{
    		text-align: center;
    	}
    </style>	
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Trang quản lý</a>
            </div>
            <!-- /.navbar-header -->
            <div align="right">
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="admin.php?controller=admin&action=list_info_user"><i class="fa fa-dashboard fa-fw"></i> Trang chủ </a>

                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Thông tin <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<li>
                                    <a href="admin.php?controller=admin&action=list_account">Danh sách tài khoản</a>
                                </li>                          	
                                <li>
                                    <a href="admin.php?controller=admin&action=list_info_user">Thông tin nhân viên</a>
                                </li>
                                <li>
                                    <a href="admin.php?controller=admin&action=list_insurrance">Bảo hiểm xã hội</a>
                                </li>
                                <li>
                                    <a href="admin.php?controller=admin&action=list_contract">Hợp đồng lao động</a>
                                </li>
                                <li>
                                    <a href="admin.php?controller=admin&action=certification">Giấy chứng nhận</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Kỹ năng nhân viên <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?controller=admin&action=list_experience">Kinh nghiệm làm việc</a>
                                </li>
                                <li>
                                    <a href="admin.php?controller=admin&action=skills">Skill bản thân</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> List đơn xin nghỉ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php?controller=admin&action=fort">Đơn xin nghỉ thông thường</a>
                                </li>
                                <li>
                                    <a href="admin.php?controller=admin&action=fort">Đơn xin nghỉ việc</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Tổng hợp công</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

            <!-- /.navbar-static-side -->
        </nav>     
    </div>    
     
