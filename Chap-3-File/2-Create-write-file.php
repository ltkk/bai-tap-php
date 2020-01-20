<?php

/**
 * Tạo file (profile.txt) có nội dung "Wellcome to legend"
 */


/**
 * Sử dụng hàm file_put_content($path,$contents)
 */

 $path     = 'profile.txt';
 $contents = "Wellcome to legend  \n Hihi";
 file_put_contents($path,$contents); 

/**
 * Sử dụng hàm fwrite
 */
$contents .= "\n fwrite";
$file = fopen($path, 'w');
fwrite($file,$contents);
fclose($file);

print_r(file($path));