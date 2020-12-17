<?php
//unset($_SESSION['notification']);
?>
<!-- jQuery -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/js/adminlte.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<?php
if (isset($_SESSION['notification']['alert'])) {
?>
    <script type="text/javascript">
        swal({
            title: '<?= $_SESSION['notification']['title'] ?>!',
            text: '<?= $_SESSION['notification']['message'] ?>',
            type: 'error',
            timer: 3000,
            showConfirmButton: true
        });
    </script>

<?php
    unset($_SESSION['notification']);
}
?>

</body>

</html>