<?php
session_start();
unset($_SESSION['admin_side']);
?>
<script type="text/javascript">
    window.location="admin_login.php";
</script>