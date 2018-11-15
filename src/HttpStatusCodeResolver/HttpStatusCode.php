<?php
/**
 * HttpStatusCode resolver.
 *
 * @license   MIT License
 * @author    hoku
 */

namespace HttpStatusCodeResolver;

class HttpStatusCode
{
    public static function resolve($code, $excludeTeapot = false) {
        $code = intval($code);
        $message = '';

        if ($excludeTeapot && $code == 418) {
            return [$code, 'Unassigned'];
        }

            if ($code == 100)                 { $message = 'Continue'; }
        elseif ($code == 101)                 { $message = 'Switching Protocols'; }
        elseif ($code == 102)                 { $message = 'Processing'; }
        elseif ($code == 103)                 { $message = 'Early Hints'; }
        elseif ($code >= 104 && $code <= 199) { $message = 'Unassigned'; }
        elseif ($code == 200)                 { $message = 'OK'; }
        elseif ($code == 201)                 { $message = 'Created'; }
        elseif ($code == 202)                 { $message = 'Accepted'; }
        elseif ($code == 203)                 { $message = 'Non-Authoritative Information'; }
        elseif ($code == 204)                 { $message = 'No Content'; }
        elseif ($code == 205)                 { $message = 'Reset Content'; }
        elseif ($code == 206)                 { $message = 'Partial Content'; }
        elseif ($code == 207)                 { $message = 'Multi-Status'; }
        elseif ($code == 208)                 { $message = 'Already Reported'; }
        elseif ($code == 209)                 { $message = 'Unassigned'; }
        elseif ($code == 226)                 { $message = 'IM Used'; }
        elseif ($code >= 227 && $code <= 299) { $message = 'Unassigned'; }
        elseif ($code == 300)                 { $message = 'Multiple Choices'; }
        elseif ($code == 301)                 { $message = 'Moved Permanently'; }
        elseif ($code == 302)                 { $message = 'Found'; }
        elseif ($code == 303)                 { $message = 'See Other'; }
        elseif ($code == 304)                 { $message = 'Not Modified'; }
        elseif ($code == 305)                 { $message = 'Use Proxy'; }
        elseif ($code == 306)                 { $message = '(Unused)'; }
        elseif ($code == 307)                 { $message = 'Temporary Redirect'; }
        elseif ($code == 308)                 { $message = 'Permanent Redirect'; }
        elseif ($code >= 309 && $code <= 399) { $message = 'Unassigned'; }
        elseif ($code == 400)                 { $message = 'Bad Request'; }
        elseif ($code == 401)                 { $message = 'Unauthorized'; }
        elseif ($code == 402)                 { $message = 'Payment Required'; }
        elseif ($code == 403)                 { $message = 'Forbidden'; }
        elseif ($code == 404)                 { $message = 'Not Found'; }
        elseif ($code == 405)                 { $message = 'Method Not Allowed'; }
        elseif ($code == 406)                 { $message = 'Not Acceptable'; }
        elseif ($code == 407)                 { $message = 'Proxy Authentication Required'; }
        elseif ($code == 408)                 { $message = 'Request Timeout'; }
        elseif ($code == 409)                 { $message = 'Conflict'; }
        elseif ($code == 410)                 { $message = 'Gone'; }
        elseif ($code == 411)                 { $message = 'Length Required'; }
        elseif ($code == 412)                 { $message = 'Precondition Failed'; }
        elseif ($code == 413)                 { $message = 'Payload Too Large'; }
        elseif ($code == 414)                 { $message = 'URI Too Long'; }
        elseif ($code == 415)                 { $message = 'Unsupported Media Type'; }
        elseif ($code == 416)                 { $message = 'Range Not Satisfiable'; }
        elseif ($code == 417)                 { $message = 'Expectation Failed'; }
        elseif ($code == 418)                 { $message = 'I\'m a teapot'; }
        elseif ($code >= 419 && $code <= 420) { $message = 'Unassigned'; }
        elseif ($code == 421)                 { $message = 'Misdirected Request'; }
        elseif ($code == 422)                 { $message = 'Unprocessable Entity'; }
        elseif ($code == 423)                 { $message = 'Locked'; }
        elseif ($code == 424)                 { $message = 'Failed Dependency'; }
        elseif ($code == 425)                 { $message = 'Too Early'; }
        elseif ($code == 426)                 { $message = 'Upgrade Required'; }
        elseif ($code == 427)                 { $message = 'Unassigned'; }
        elseif ($code == 428)                 { $message = 'Precondition Required'; }
        elseif ($code == 429)                 { $message = 'Too Many Requests'; }
        elseif ($code == 430)                 { $message = 'Unassigned'; }
        elseif ($code == 431)                 { $message = 'Request Header Fields Too Large'; }
        elseif ($code >= 432 && $code <= 450) { $message = 'Unassigned'; }
        elseif ($code == 451)                 { $message = 'Unavailable For Legal Reasons'; }
        elseif ($code >= 452 && $code <= 499) { $message = 'Unassigned'; }
        elseif ($code == 500)                 { $message = 'Internal Server Error'; }
        elseif ($code == 501)                 { $message = 'Not Implemented'; }
        elseif ($code == 502)                 { $message = 'Bad Gateway'; }
        elseif ($code == 503)                 { $message = 'Service Unavailable'; }
        elseif ($code == 504)                 { $message = 'Gateway Timeout'; }
        elseif ($code == 505)                 { $message = 'HTTP Version Not Supported'; }
        elseif ($code == 506)                 { $message = 'Variant Also Negotiates'; }
        elseif ($code == 507)                 { $message = 'Insufficient Storage'; }
        elseif ($code == 508)                 { $message = 'Loop Detected'; }
        elseif ($code == 509)                 { $message = 'Unassigned'; }
        elseif ($code == 510)                 { $message = 'Not Extended'; }
        elseif ($code == 511)                 { $message = 'Network Authentication Required'; }
        elseif ($code >= 512 && $code <= 599) { $message = 'Unassigned'; }
        else                                  { return false; }

        return [$code, $message];
    }

}
