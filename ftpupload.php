<?php

require_once('ftpnew.php');

ini_set('error_reporting', E_ALL);
ini_set("display_errors", 1);



$date = date("d-m-Y");

$localPath = dirname(__FILE__).'/html/'.$date;

$ftp = new FtpNew("host");

$ftpSession = $ftp->login("login", "password");

if (!$ftpSession) die("Failed to connect.");

$errorList = $ftp->send_recursive_directory($localPath, '/mednovosti/'.$date);

print_r($errorList);

$ftp->disconnect();
