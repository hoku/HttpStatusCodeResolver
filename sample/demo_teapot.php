<?php
require_once(dirname(dirname(__FILE__)) . '/src/HttpStatusCodeResolver/HttpStatusCode.php');

var_dump(\HttpStatusCodeResolver\HttpStatusCode::resolve(418));
// -> I'm a teapot

var_dump(\HttpStatusCodeResolver\HttpStatusCode::resolve(418, true));
// -> Unassigned
