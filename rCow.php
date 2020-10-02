<?php
file_put_contents("./milkable.php", "1");

// Reset IP log
if (date('H') = 0) {
   file_put_contents("admin/log.html", "");
}
?>