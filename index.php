<?php
if (!isset($_SESSION)) {
    session_start();
}
$connfile = 'config/dbconnection.php';
if (file_exists($connfile)) {
    require 'config/dbconnection.php';
    require 'Autoload.php';

    $login = new UserClass();
    $check = new CheckValidUser();
    $level = new AccessLevel();
} else {
    header('Location: installer/install.php');
    exit();
}

if (isset($_GET['user']) && !empty($_GET['user'])) {
    $user = $_GET['user'];
} else {
    $user = '';
}
?>
<?php include 'elements/header.php'; ?>
</head>
<body class="hold-transition sidebar-mini">
    <?php
    if ($login->isLoggedIn() === true) {
        ?>
        <div class="wrapper">
            <!-- Navbar -->
            <?php include 'elements/navbar.php'; ?>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index.php" class="brand-link">
                    <?php
                    $logo = IMG_PAGE;
                    if (file_exists($logo)) {
                        ?>
                        <img src="<?php echo $logo; ?>" alt="<?php echo SITE_NAME; ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light"><?php echo SITE_NAME; ?></span>
                        <?php
                    } else {
                        echo SITE_NAME;
                    }
                    ?>
                </a>
                <!-- Sidebar -->
                <div class="sidebar">                   
                    <!-- Sidebar Menu -->
                    <?php include 'elements/sidenav.php'; ?>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">

                                <h1 class="m-0 text-dark"><?php echo $vpages; ?></h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="<?php echo $base; ?>">Inicio</a></li>
                                    <li class="breadcrumb-item active"><?php echo $vpages; ?></li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <?php include 'elements/alerts.php'; ?>


                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mr-auto">
                                <div class="card card-primary card-outline">
                                    <div class="card-body">
                                        <h2>Poner el contenido que deseas</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- /.container-fluid -->

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <?php
            include 'elements/footprint.php';
            ?>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        <?php
    } else {
        header('Location: signin/login.php');
        exit();
    }
    require 'elements/footer.php';
    ?>

</body>
</html>
