HttpStatusCodeResolver
================

**HttpStatusCodeResolver** is a library for obtaining information on the HTTP status code.


Installation
------------

The recommended way to install HttpStatusCodeResolver is through Composer.

``` shell
composer require hoku-lib/httpstatuscoderesolver
```


Usage
-----

Get a message.

``` php
<?php
require_once 'vendor/autoload.php';

$statusCodeInfo = \HttpStatusCodeResolver\HttpStatusCode::resolve(400);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Demo</title>
</head>
<body>
    <?php if ($statusCodeInfo) : ?>
        <div><?=$statusCodeInfo[0]?></div>
        <div><?=$statusCodeInfo[1]?></div>
    <?php else : ?>
        <div>I do not know!</div>
    <?php endif; ?>
</body>
</html>
```


Output header.

``` php
<?php
require_once 'vendor/autoload.php';

\HttpStatusCodeResolver\HttpHeader::http_response_code(403);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Demo</title>
</head>
<body>
    <h1>Forbidden!!!!</h1>
</body>
</html>
```


Original status code (When using http_response_code().)

``` php
<?php
require_once 'vendor/autoload.php';

http_response_code(987);
// -> HTTP/1.1 500 Internal Server Error
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
```


Original status code (When using HttpHeader::http_response_code().)

``` php
<?php
require_once 'vendor/autoload.php';

\HttpStatusCodeResolver\HttpHeader::http_response_code(987, 'MyOriginalCode');
// -> HTTP/1.1 987 MyOriginalCode
// Yay! Happy!
->
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Demo</title>
</head>
<body>
    <div>Yay!!!!</div>
</body>
</html>
```


License
-------

HttpStatusCodeResolver is released under the MIT License. See the LICENSE
file for details.
