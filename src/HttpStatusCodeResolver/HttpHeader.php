<?php
/**
 * HttpStatusCode resolver.
 *
 * @license   MIT License
 * @author    hoku
 */

namespace HttpStatusCodeResolver;

require_once(dirname(__FILE__) . '/HttpStatusCode.php');

class HttpHeader
{
    public static function http_response_code($code,
                                              $unknownMessage = 'Unknown',
                                              $httpVersion = '1.1',
                                              $excludeTeapot = false,
                                              $return = false) {

        $headerString = 'HTTP/' . $httpVersion;

        $statusCodeInfo = HttpStatusCode::resolve($code, $excludeTeapot);
        if ($statusCodeInfo) {
            $headerString .= ' ' . $statusCodeInfo[0] . ' ' . $statusCodeInfo[1];
        } else {
            $headerString .= ' ' . intval($code) . ' ' . $unknownMessage;
        }

        if ($return) {
            return $headerString;
        } else {
            header($headerString);
            return true;
        }
    }

}
