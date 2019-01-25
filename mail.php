<?php
$headers = "From: kalam.ul.mazid@gmail.com\r\n";
$headers .= 'Content-Type: text/plain; charset=utf-8';

mail("kalam.ul.mazid@gmail.com", "Test Subject", "Test Message", $headers);

?>