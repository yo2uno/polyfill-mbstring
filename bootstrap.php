<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Polyfill\stringmb as p;

if (\PHP_VERSION_ID >= 80000) {
    return require __DIR__.'/bootstrap80.php';
}

if (!function_exists('mb_convert_encoding')) {
    function mb_convert_encoding($string, $to_encoding, $from_encoding = null) { return p\stringmb::mb_convert_encoding($string, $to_encoding, $from_encoding); }
}
if (!function_exists('mb_decode_mimeheader')) {
    function mb_decode_mimeheader($string) { return p\stringmb::mb_decode_mimeheader($string); }
}
if (!function_exists('mb_encode_mimeheader')) {
    function mb_encode_mimeheader($string, $charset = null, $transfer_encoding = null, $newline = "\r\n", $indent = 0) { return p\stringmb::mb_encode_mimeheader($string, $charset, $transfer_encoding, $newline, $indent); }
}
if (!function_exists('mb_decode_numericentity')) {
    function mb_decode_numericentity($string, $map, $encoding = null) { return p\stringmb::mb_decode_numericentity($string, $map, $encoding); }
}
if (!function_exists('mb_encode_numericentity')) {
    function mb_encode_numericentity($string, $map, $encoding = null, $hex = false) { return p\stringmb::mb_encode_numericentity($string, $map, $encoding, $hex); }
}
if (!function_exists('mb_convert_case')) {
    function mb_convert_case($string, $mode, $encoding = null) { return p\stringmb::mb_convert_case($string, $mode, $encoding); }
}
if (!function_exists('mb_internal_encoding')) {
    function mb_internal_encoding($encoding = null) { return p\stringmb::mb_internal_encoding($encoding); }
}
if (!function_exists('mb_language')) {
    function mb_language($language = null) { return p\stringmb::mb_language($language); }
}
if (!function_exists('mb_list_encodings')) {
    function mb_list_encodings() { return p\stringmb::mb_list_encodings(); }
}
if (!function_exists('mb_encoding_aliases')) {
    function mb_encoding_aliases($encoding) { return p\stringmb::mb_encoding_aliases($encoding); }
}
if (!function_exists('mb_check_encoding')) {
    function mb_check_encoding($value = null, $encoding = null) { return p\stringmb::mb_check_encoding($value, $encoding); }
}
if (!function_exists('mb_detect_encoding')) {
    function mb_detect_encoding($string, $encodings = null, $strict = false) { return p\stringmb::mb_detect_encoding($string, $encodings, $strict); }
}
if (!function_exists('mb_detect_order')) {
    function mb_detect_order($encoding = null) { return p\stringmb::mb_detect_order($encoding); }
}
if (!function_exists('mb_parse_str')) {
    function mb_parse_str($string, &$result = []) { parse_str($string, $result); return (bool) $result; }
}
if (!function_exists('mb_strlen')) {
    function mb_strlen($string, $encoding = null) { return p\stringmb::mb_strlen($string, $encoding); }
}
if (!function_exists('mb_strpos')) {
    function mb_strpos($haystack, $needle, $offset = 0, $encoding = null) { return p\stringmb::mb_strpos($haystack, $needle, $offset, $encoding); }
}
if (!function_exists('mb_strtolower')) {
    function mb_strtolower($string, $encoding = null) { return p\stringmb::mb_strtolower($string, $encoding); }
}
if (!function_exists('mb_strtoupper')) {
    function mb_strtoupper($string, $encoding = null) { return p\stringmb::mb_strtoupper($string, $encoding); }
}
if (!function_exists('mb_substitute_character')) {
    function mb_substitute_character($substitute_character = null) { return p\stringmb::mb_substitute_character($substitute_character); }
}
if (!function_exists('mb_substr')) {
    function mb_substr($string, $start, $length = 2147483647, $encoding = null) { return p\stringmb::mb_substr($string, $start, $length, $encoding); }
}
if (!function_exists('mb_stripos')) {
    function mb_stripos($haystack, $needle, $offset = 0, $encoding = null) { return p\stringmb::mb_stripos($haystack, $needle, $offset, $encoding); }
}
if (!function_exists('mb_stristr')) {
    function mb_stristr($haystack, $needle, $before_needle = false, $encoding = null) { return p\stringmb::mb_stristr($haystack, $needle, $before_needle, $encoding); }
}
if (!function_exists('mb_strrchr')) {
    function mb_strrchr($haystack, $needle, $before_needle = false, $encoding = null) { return p\stringmb::mb_strrchr($haystack, $needle, $before_needle, $encoding); }
}
if (!function_exists('mb_strrichr')) {
    function mb_strrichr($haystack, $needle, $before_needle = false, $encoding = null) { return p\stringmb::mb_strrichr($haystack, $needle, $before_needle, $encoding); }
}
if (!function_exists('mb_strripos')) {
    function mb_strripos($haystack, $needle, $offset = 0, $encoding = null) { return p\stringmb::mb_strripos($haystack, $needle, $offset, $encoding); }
}
if (!function_exists('mb_strrpos')) {
    function mb_strrpos($haystack, $needle, $offset = 0, $encoding = null) { return p\stringmb::mb_strrpos($haystack, $needle, $offset, $encoding); }
}
if (!function_exists('mb_strstr')) {
    function mb_strstr($haystack, $needle, $before_needle = false, $encoding = null) { return p\stringmb::mb_strstr($haystack, $needle, $before_needle, $encoding); }
}
if (!function_exists('mb_get_info')) {
    function mb_get_info($type = 'all') { return p\stringmb::mb_get_info($type); }
}
if (!function_exists('mb_http_output')) {
    function mb_http_output($encoding = null) { return p\stringmb::mb_http_output($encoding); }
}
if (!function_exists('mb_strwidth')) {
    function mb_strwidth($string, $encoding = null) { return p\stringmb::mb_strwidth($string, $encoding); }
}
if (!function_exists('mb_substr_count')) {
    function mb_substr_count($haystack, $needle, $encoding = null) { return p\stringmb::mb_substr_count($haystack, $needle, $encoding); }
}
if (!function_exists('mb_output_handler')) {
    function mb_output_handler($string, $status) { return p\stringmb::mb_output_handler($string, $status); }
}
if (!function_exists('mb_http_input')) {
    function mb_http_input($type = null) { return p\stringmb::mb_http_input($type); }
}

if (!function_exists('mb_convert_variables')) {
    function mb_convert_variables($to_encoding, $from_encoding, &...$vars) { return p\stringmb::mb_convert_variables($to_encoding, $from_encoding, ...$vars); }
}

if (!function_exists('mb_ord')) {
    function mb_ord($string, $encoding = null) { return p\stringmb::mb_ord($string, $encoding); }
}
if (!function_exists('mb_chr')) {
    function mb_chr($codepoint, $encoding = null) { return p\stringmb::mb_chr($codepoint, $encoding); }
}
if (!function_exists('mb_scrub')) {
    function mb_scrub($string, $encoding = null) { $encoding = null === $encoding ? mb_internal_encoding() : $encoding; return mb_convert_encoding($string, $encoding, $encoding); }
}
if (!function_exists('mb_str_split')) {
    function mb_str_split($string, $length = 1, $encoding = null) { return p\stringmb::mb_str_split($string, $length, $encoding); }
}

if (extension_loaded('stringmb')) {
    return;
}

if (!defined('MB_CASE_UPPER')) {
    define('MB_CASE_UPPER', 0);
}
if (!defined('MB_CASE_LOWER')) {
    define('MB_CASE_LOWER', 1);
}
if (!defined('MB_CASE_TITLE')) {
    define('MB_CASE_TITLE', 2);
}
