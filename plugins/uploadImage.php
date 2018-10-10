<?php
copy($_FILES['file']['tmp_name'],'../..'.$_POST['to'].$_POST['imgName'].'.png');
?>
