<?php
    session_start();
	session_unset("name");
	echo '<script type="text/javascript">
                    window.location = "index.php"
                    </script>';
?>