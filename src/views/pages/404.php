<?php

$title = '404 not found';

ob_start();?>
<div>
    PAGE 404
</div>
<?php
echo $existing_product[0]["name"];
$page_content = ob_get_clean();
