<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

    <div class="content-wrapper">
    <!-- START PAGE CONTENT-->



<?php include ("./footer.php"); ?>

        <!-- PAGE LEVEL SCRIPTS-->
        <script type="text/javascript">
            $(function() {
                $('#example-table').DataTable({
                    pageLength: 10,
                });
            })
        </script>
