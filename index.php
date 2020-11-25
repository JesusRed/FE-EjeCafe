<?php
define("APPLICATION_PATH",  dirname(__FILE__));

$app  = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$app->bootstrap() //llamar a los métodos de arranque definidos en Bootstrap.php
 ->run();
?>