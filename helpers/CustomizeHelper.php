<?php

namespace app\helpers;

class CustomizeHelper {
    public function getIP(){ 
        if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) 
            $ip = getenv("HTTP_CLIENT_IP"); 
        else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) 
            $ip = getenv("HTTP_X_FORWARDED_FOR"); 
        else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) 
            $ip = getenv("REMOTE_ADDR"); 
        else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) 
            $ip = $_SERVER['REMOTE_ADDR']; 
        else 
            $ip = "0.0.0.0"; 
        return($ip); 
    } 

    public function cleanXSS($string, $low = FALSE) {
        $string = trim($string);
        $string = strip_tags($string);
        $string = htmlspecialchars ($string);
        if ($low) {
            return $string;
        }
        $string = str_replace(['"', "\\", "'", "/", "..", "../", "./", "//"], '', $string);
        $no = '/%0[0-8bcef]/';
        $string = preg_replace($no, '', $string);
        $no = '/%1[0-9a-f]/';
        $string = preg_replace($no, '', $string);
        $no = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S';
        $string = preg_replace($no, '', $string);
        return $string;
    }
}
