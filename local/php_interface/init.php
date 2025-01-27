<?php
// echo ('jhelo');
define("TRO_TEMPLATE_PATH", "/local/templates/.default");

function debug($data){
    echo '<pre>'.print_r($data,1).'</pre>';
}
// заплатка пока нет лицензии
global $SiteExpireDate;
if (DEMO && ($SiteExpireDate < time())) {
    $SiteExpireDate = time() * 7;
}