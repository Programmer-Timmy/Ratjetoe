<?php

/**
 * Email Server settings
 */

$host = 'smtp.strato.com';
$username = 'student@ictcampus.nl';
$password = 'N13tSp@mmen';
$port = 456;

$debug = true;

if (!$debug) {
    error_reporting(E_ALL ^ E_DEPRECATED);
    error_reporting(E_ERROR | E_PARSE);
    set_exception_handler(function ($exception) {
        echo "<h1> oops er is iets fout gegaan</h1>";
    });
}