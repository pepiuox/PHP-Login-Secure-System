<!-- jQuery -->
<script src="<?php echo $base; ?>plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $base; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $base; ?>plugins/adminlte/js/adminlte.min.js"></script>

<script>
    $(function () {
        $("a").find('.active').each(function () {
            $(this).parent().closest('.has-treeview').addClass("menu-open");

            $('.has-treeview').children('a').first().addClass("active");

            $('.has-treeview').find('a').each(function () {
                $(this).addClass("active");
            });
        });
    });
</script>
