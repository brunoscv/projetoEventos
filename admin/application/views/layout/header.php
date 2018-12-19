<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Sistema de Eventos</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link rel="shortcut icon" href="assets/images/icone_simbolo.png" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <!-- link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css' -->
        <link href="<?php echo base_url(); ?>assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	 -->
        <link href="<?php echo base_url(); ?>assets/plugins/datatables/css/datatable.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/raty/jquery.raty.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.css" rel="stylesheet" type="text/css"/> -->
        <link href="<?php echo base_url(); ?>assets/plugins/select-picker/css/bootstrap-select.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
        
        <!-- Theme Styles -->
        <link href="<?php echo base_url(); ?>assets/css/modern.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/sidebar.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/toastr.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- Font Styles -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 

        <script src="<?php echo base_url(); ?>assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            var base_url = "<?php echo base_url(); ?>";
        </script>
        
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/validate/jquery.validate.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/validate/jquery.validate.rules.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/input-moeda/moeda.js"></script>

        
       <style type="text/css">
       .td-actions{text-align: right;}
       </style>
    </head>
    <body class="page-header-fixed compact-menu page-horizontal-bar">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo-box">
                        <a href="<?php echo base_url(); ?>" class="logo-text"><span>Sistema de Controle de Projetos</span></a>
                           <!--  <img class="logo-img" src="<?php echo base_url();?>assets/images/logomarca_login.png"> -->
                    </div><!-- Logo Box -->
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                       
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $userdata['nome']; ?> <b class="fa fa-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li role="presentation"><a href="<?php echo site_url("dashboard/alterarSenha");?>"><i class="fa fa-calendar"></i>Alterar Senha</a></li>
                                        <li role="presentation" class="divider"></li>
                                        <!-- <li role="presentation"><a href="javascript:;"><i class="fa fa-lock"></i>Lock screen</a></li> -->
                                        <li role="presentation"><a href="<?php echo site_url("auth/logout"); ?>"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <?php echo recursiveMenuNav($menuOrdenado,'id="sidebar-menu"');$menuOrdenado=FALSE; ?>
                </ul>  
            </div>
            <script type="text/javascript">
                 $(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
                        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
                    });
                    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
                        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
                    });
                })  
            </script>
            <!-- /.navbar-collapse -->
        </nav>
        <!-- Navbar -->
        <div class="col-lg-10 col-lg-offset-2 col-md-10 col-md-offset-2 col-sm-12 small-sidebar page-inner">
          