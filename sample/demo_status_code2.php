<?php
require_once(dirname(dirname(__FILE__)) . '/src/HttpStatusCodeResolver/HttpStatusCode.php');
require_once(dirname(dirname(__FILE__)) . '/src/HttpStatusCodeResolver/HttpHeader.php');


http_response_code(987);
// Oh my God!!!!
// PHP converts the status code to 500...
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Demo</title>
</head>
<body>
    <div>Oh no...</div>
</body>
</html>
