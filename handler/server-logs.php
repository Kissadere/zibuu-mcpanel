<!--
<?php /*
include "../inludes/sesion.php";
$logs = shell_exec('tail -50 /home/minecraft/logs/latest.log'); */
?>
<textarea id="console" name="console" rows="20" class="form-control" style="background-color:#282b2f;color:#51c3d7;" disabled><?php echo $logs; ?></textarea>
<script>
var textarea = document.getElementById('console');
textarea.scrollTop = textarea.scrollHeight;
</script>
-->
