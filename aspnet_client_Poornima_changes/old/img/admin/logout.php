<?php 
    session_start();

    session_destroy();
?>
<script type="text/javascript">
   window.location.replace("index.php?msg=You are succesfully logged out.");
</script>