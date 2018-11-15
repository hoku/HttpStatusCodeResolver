<?php
require_once(dirname(dirname(__FILE__)) . '/src/HttpStatusCodeResolver/HttpStatusCode.php');

var_dump(\HttpStatusCodeResolver\HttpStatusCode::resolve(200));
var_dump(\HttpStatusCodeResolver\HttpStatusCode::resolve(401));
var_dump(\HttpStatusCodeResolver\HttpStatusCode::resolve(503));

for ($statusCode = 1; $statusCode < 1000; $statusCode++) {
    $statusCodeInfo = \HttpStatusCodeResolver\HttpStatusCode::resolve($statusCode);
    var_dump($statusCodeInfo);
}
