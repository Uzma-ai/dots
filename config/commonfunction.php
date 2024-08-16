<?php 

function base64UrlEncode($data) {
    // Standard base64 encode
    $base64 = base64_encode($data);
    // URL-safe base64 encode
    $base64Url = str_replace(['+', '/', '='], ['-', '_', ''], $base64);
    return $base64Url;
}

function base64UrlDecode($data) {
    // URL-safe base64 decode
    $base64 = str_replace(['-', '_'], ['+', '/'], $data);
    // Standard base64 decode
    $decoded = base64_decode($base64);
    return $decoded;
}


?>