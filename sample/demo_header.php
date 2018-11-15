<?php
require_once(dirname(dirname(__FILE__)) . '/src/HttpStatusCodeResolver/HttpHeader.php');

// $code
\HttpStatusCodeResolver\HttpHeader::http_response_code(200);
// -> HTTP/1.1 200 OK


// $code
// $httpVersion = '1.1'
// $unknownMessage = 'Unknown'
// $excludeTeapot = false
// $return = false
\HttpStatusCodeResolver\HttpHeader::http_response_code(987, 'MyOriginalCode', '1.0', false, false);
// -> HTTP/1.0 987 MyOriginalCode


// If you would like to capture the output of http_response_code(), use the return parameter. When this parameter is set to TRUE, http_response_code() will return the information rather than print it.
$headerString = \HttpStatusCodeResolver\HttpHeader::http_response_code(418, 'Unknown', '1.1', true, true);
header($headerString);
var_dump($headerString);
// -> HTTP/1.1 418 I'm a teapot
