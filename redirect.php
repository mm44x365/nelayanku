<?php
$_SESSION['notification'] = array('alert' => 'error', 'title' => 'Gagal', 'message' => 'Ada sesuatu yang salah hehe.');
?>
<script>
    window.location.replace('<?= base_url() ?>');
</script>