<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Start Website Information Section-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Sun Investment Buniness Global Co., Ltd">
        <meta name="keywords" content="business, trading, accounting, finance, education">
        <meta name="author" content="Net I Solutions , Developed by Mr. HENG Vongkol. Email:hengvongkol@gmail.com">
        <title><?php echo $title; ?></title>
        <!-- End of Information Section -->
        <!-- Start CSS and JavaScript Link Section  -->
		<link rel="icon" href="<?php echo base_url('assets/images/favi.ico');?>" type="image/x-icon">
        <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/flexi/css/style.css');?>" rel="stylesheet" />
	<script src="<?php echo base_url('assets/js/jquery-1.9.1.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
        <!-- End of CSS and JavaScript Link Section -->
       
            <style>
                html,body{margin: 0; padding: 0;}
                nav.ch{
                    background: url(<?php echo base_url('assets/images/bg.png'); ?>) repeat-x;
                    border: none;
                    border-radius: 0;
                }
                ul#nav1>li>a,ul#nav2>li>a
                {
                    color: #EEF;
					padding: 20px 16px;
					margin:0 1px;
                }
				#bs-example-navbar-collapse-1{
					margin-top:-5px!important;
				}
				#nav1{
					margin-top:-5px;
				}
                ul#nav1>li>a:hover
                {
                    background: url(<?php echo base_url('assets/images/bg-menu.png'); ?>) repeat;
                }
                ul#nav1>li>a:focus,ul#nav2>li>a:focus{
                 color: #FFF;   
                 background: url(<?php echo base_url('assets/images/bg-menu.png'); ?>) repeat;
                }
                ul.sub-menu li a:hover{
                    background: #afd9ee;
                }
				ul.sub-menu{
					background: url(<?php echo base_url('assets/images/bg-menu.png'); ?>) repeat;
					
					width: 300px;
				}
				ul.sub-menu> li> a{
					padding: 12px 9px;
					border-bottom: 1px solid rgba(255,255,255,0.2);
					color: #ddd;
				}
				
                @media (max-width:1024px){
                    ul#nav1{
                        background: #EEF !important;
                    }
                    ul#nav1>li>a{
                        color: #036;
                    }
                    ul#nav1>li>a:hover,ul#nav1>li>a:focus{
                        color: #FFF;
                    }
					
					.footer div{
						font-size: 11px!important;
						text-align: left!important;
					}
                }
				@media (max-width:1024px){
					.navbar-toggle{
						display: inline-block;
					}
				}
            </style>
    </head>
    <!-- Start body section -->
    <body>
        <nav class="navbar ch" style="position: fixed;z-index: 9999;top:0;left:0;width:100%;padding:8px 0">
            <div class="container" id="container" style="margin-top:-8px;padding:5px 0;">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="glyphicon glyphicon-align-justify text-white"></span>
                </button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>" style="color:#FFF">
                      <img align="left" src="<?php echo base_url('assets/images/logo.png'); ?>" width="45" height="45" style="margin-top:-13px;" />
                      <span class="logo-text" style='color: yellow'>&nbsp;&nbsp;Sun Investment Business Global Co., Ltd</span>
                  </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="nav1" style="margin-left: 54px">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
						<ul class="dropdown-menu sub-menu">
							<li class="dropdown-submenu"><a href="#">Trading Investment <span class="pull-right">&raquo;</span></a>
								<ul class="dropdown-menu submenu" style="top:1%">
									<li><a href="<?php echo base_url('page/view/1'); ?>">Tourism Services</a></li>
									<li><a href="<?php echo base_url('page/view/2'); ?>">Biz J&V Investment</a></li>
									<li><a href="<?php echo base_url('page/view/3'); ?>">Real Estate Service</a></li>
									<li><a href="<?php echo base_url('page/view/4'); ?>">Constructing Service</a></li>
									<li><a href="<?php echo base_url('page/view/5'); ?>">SME's (Local) Service</a></li>
									<li><a href="<?php echo base_url('page/view/6'); ?>">Products Trading</a></li>
								</ul>
							</li>
							<li class="dropdown-submenu"><a href="#">International Financing <span class="pull-right">&raquo;</span></a>
								<ul class="dropdown-menu submenu" style="top:20%">
									<li><a href="<?php echo base_url('page/view/7'); ?>">Project Funding</a></li>
									<li><a href="<?php echo base_url('page/view/8'); ?>">Investment Banking Unit</a></li>
									<li><a href="<?php echo base_url('page/view/9'); ?>">Private Banking Program</a></li>
									<li><a href="<?php echo base_url('page/view/10'); ?>">Interbank Program</a></li>
									<li><a href="<?php echo base_url('page/view/11'); ?>">Bank Investment Services</a></li>
									
								</ul>
							</li>
							<li class="dropdown-submenu"><a href="#">Education & Vocational Training Centre <span class="pull-right">&raquo;</span></a>
								<ul class="dropdown-menu submenu" style="top:39%">
									<li><a href="<?php echo base_url('page/view/12'); ?>">Biz Plan Trading</a></li>
									<li><a href="<?php echo base_url('page/view/13'); ?>">Agricultural Course</a></li>
									<li><a href="<?php echo base_url('page/view/14'); ?>">TOT</a></li>
									<li><a href="<?php echo base_url('page/view/15'); ?>">EL. & Computer</a></li>
									<li><a href="<?php echo base_url('page/view/16'); ?>">Employment Course</a></li>
									<li><a href="<?php echo base_url('page/view/17'); ?>">Financial Market Trading</a></li>
									
								</ul>
							</li>
							<li class="dropdown-submenu"><a href="#">Agriculture <span class="pull-right">&raquo;</span></a>
								<ul class="dropdown-menu submenu" style="top:58%">
									<li><a href="<?php echo base_url('page/view/18'); ?>">Fertilizer & Soil</a></li>
									<li><a href="<?php echo base_url('page/view/19'); ?>">Paddy Rice</a></li>
									<li><a href="<?php echo base_url('page/view/20'); ?>">Vegetable</a></li>
									<li><a href="<?php echo base_url('page/view/21'); ?>">Moringa Plantation</a></li>
									
								</ul>
							</li>
							<li class="dropdown-submenu"><a href="#" style="border-bottom:none">Donut Production <span class="pull-right">&raquo;</span></a>
								<ul class="dropdown-menu submenu" style="top:77%">
									<li><a href="<?php echo base_url('page/view/22'); ?>">Production & Management</a></li>
									<li><a href="<?php echo base_url('page/view/23'); ?>">Cashier</a></li>
									<li><a href="<?php echo base_url('page/view/24'); ?>">Marketing</a></li>
									
								</ul>
							</li>
							
						</ul>
					</li>
					
					<li><a href="#">Career</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">About Us</a></li>
                   
                </ul>
              
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        <div class="container" style="margin-top: 63px; margin-bottom: 36px;">
         