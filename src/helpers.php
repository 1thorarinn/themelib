<?php
/*
 *
 * Hér koma functions og work in progress temp hlutir
 *
 */




 function tms_get_browser_info()
 {
 $http_useragent = $_SERVER['HTTP_USER_AGENT'];
 $browser_name = 'Unknown';
 $version= "";
 if(preg_match('/MSIE/i',$http_useragent) && !preg_match('/Opera/i',$http_useragent))
 {
 $browser_name = 'Internet Explorer Browser';
 $ub = "MSIE";
 }
 elseif(preg_match('/Firefox/i',$http_useragent))
 {
 $browser_name = 'Mozilla Firefox Browser';
 $ub = "Firefox";
 }
 elseif(preg_match('/Chrome/i',$http_useragent))
 {
 $browser_name = 'Google Chrome Browser';
 $ub = "Chrome";
 }
 elseif(preg_match('/Safari/i',$http_useragent))
 {
 $browser_name = 'Apple Safari Browser';
 $ub = "Safari";
 }
 elseif(preg_match('/Opera/i',$http_useragent))
 {
 $browser_name = 'Opera Browser';
 $ub = "Opera";
 }
 elseif(preg_match('/Netscape/i',$http_useragent))
 {
 $browser_name = 'Netscape Browser';
 $ub = "Netscape";
 }
 $known = array('Version', $ub, 'other');
 $pattern = '#(?<browser>' . join('|', $known) .
 ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
 if (!preg_match_all($pattern, $http_useragent, $matches)) {
 // we have no matching number just continue
 }
 $i = count($matches['browser']);
 if ($i != 1) {
 if (strripos($http_useragent,"Version") < strripos($http_useragent,$ub)){
 $version= $matches['version'][0];
 }
 else {
 $version= $matches['version'][1];
 }
 }
 else {
 $version= $matches['version'][0];
 }
 if ($version==null || $version=="") {$version="?";}
 return array(
 'userAgent' => $http_useragent,
 'name' => $browser_name,
 'version' => $version
 );
 }
