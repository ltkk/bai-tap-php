<?php

/**
 * Set timezone 'Asia/Ho_Chi_Minh
 */
date_default_timezone_set('Asia/Ho_Chi_Minh');

/**
 * Tạo object lấy thời gian hiện tại 
 */

$now = new DateTime();
print_r($now);

echo('<br />');
echo($now->format('d - m - Y h:m:i'));

/**
 * Xác định thời gian cách đây 29 ngày
 */

$interval = new DateInterval('P29D');
echo('<br />');
echo($now->sub($interval)->format('d - m - Y h:m:i'));
echo('<br />');

/**
 * Tạo biến $date với mốc thời gian y = 2020 m = 4 d = 29
 */

$date = new DateTime();
$date->setDate(2020, 4, 29);
print_r($date);


/**
 *  Convert string to time
 */
echo('<br />');
echo(date('d - m - y',strtotime('3 October 2020')));