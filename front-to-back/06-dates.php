<?php

# Date function

echo date('d'); // day #
echo '<br>';
echo date('m'); // month #
echo '<br>';
echo date('y'); // 2-digit year
echo '<br>';
echo date('Y'); // 4-digit year
echo '<br>';
echo date('l'); // day of week
echo '<br>';
echo date('Y/m/d');
echo '<br>';
echo date('m-d-y');
echo '<br>';
echo date('h'); // hour
echo '<br>';
echo date('i'); // minute
echo '<br>';
echo date('s'); // second 
echo '<br>';
echo date('a'); // am or pm
echo '<br>';

// define timezone
date_default_timezone_set('America/Los_Angeles');
echo date('h:i:s a');
echo '<br>';

// make time
$timestamp = mktime(10,14, 54, 9, 10, 1981);
// h, m, s, m, d, y
echo $timestamp;
// actually displays number of seconds between time and Jan 1, 1970
echo '<br>';
// To make unix timestamp human readable
echo date('m/d/Y', $timestamp);
echo '<br>';

// String to time
$timestamp2 = strtotime('7:00pm March 22 2020');
echo $timestamp2;
echo '<br>';
echo date('h:m a m/d/Y', $timestamp2);
echo '<br>';

$timestamp3 = strtotime('tomorrow');
echo date('h:m:s a, m/d/Y', $timestamp3);
echo '<br>';

$timestamp4 = strtotime('next Sunday');
echo date('h:m:s a, m/d/Y', $timestamp4);
echo '<br>';

$timestamp5 = strtotime('+2 months');
echo date('h:m:s a, m/d/Y', $timestamp5);
echo '<br>';