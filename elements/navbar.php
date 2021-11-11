<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo $base; ?>index.php" class="nav-link">Inico</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo $base; ?>users/profile.php?user=contacts" class="nav-link">Contactos</a>
        </li>         
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php
                if (!empty(USERS_AVATARS)) {
                    echo '<img src="<?php echo $base; ?>uploads/' . USERS_AVATARS . '" class="user-image img-circle elevation-2" alt="' . USERS_NAMES . '">';
                }
                ?>
                <i class="far fa-user"></i>
                <span class="d-none d-md-inline"><?php echo USERS_FULLNAMES; ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li class="user-header bg-primary">
                    <?php
                    if (!empty(USERS_AVATARS)) {
                        echo '<img src="<?php echo $base; ?>uploads/' . USERS_AVATARS . '" class="img-circle elevation-2" alt="' . USERS_NAMES . '">';
                    }
                    ?>
                    <p>
                        <?php echo USERS_NAMES . ' - ' . USERS_SKILLS; ?>
                        <small>Member since Nov. 2012</small>
                    </p>
                </li>
                <li class="user-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="#">link de interes</a>
                        </div>
                    </div>
                    <!-- /.row -->
                </li>
                <li class="user-footer">
                    <form method="post">
                        <button class="btn btn-default btn-flat" type="submit" name="profile">Perfil</button>
                        <button class="btn btn-default btn-flat float-right" type="submit" name="logout">
                           Cerrar sesión
                        </button>
                    </form>

                </li>
            </ul>
        </li>
    </ul>
</nav>
