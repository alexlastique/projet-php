<?php

$title = 'product';

ob_start();?>
<div>
    PAGE PRODUCT <?=$_GET['slug']?>
</div>
<?php
$page_content = ob_get_clean();
