<?php

/**
 * - Đọc nội dung file (File.txt)
 * 
 * -> Sử dụng hàm file_get_contents($path)
 */

$path     = './File.txt';
$contents = file_get_contents($path);
// print_r($contents); 
/**
 *
 * -> Sử dụng hàm readfile($path)
 *  
 */

// $contents = readfile($path);

/**
 *
 * -> Sử dụng hàm readfile($path)
 *
 */

$file     = fopen($path, 'r');
$contents = fread($file, filesize($path));
fclose($file);

/**
 *
 * -> Sử dụng hàm file($path) -> convert nội dung file -> array -> 1 dòng = 1 phần tử của mảng
 *
 */

$contents = file($path);


/**
 * - Đọc nội dung file ('Contacts.csv')
 * 
 * -> Sử dụng hàm fgetcsv($path)
 */

$path     = './Contacts.csv';
$file     = fopen($path,'r');
$contents = fgetcsv($file);

/**
 * Download file (File.txt)
 */

$file = 'File.txt';
if (file_exists($file)) {
//  header('Content-Description: File Transfer');
//  header('Content-Type: application/octet-stream');
//  header('Content-Disposition: attachment; filename="'.basename($file).'"');
//  header('Expires: 0');
//  header('Cache-Control: must-revalidate');
//  header('Pragma: public');
//  header('Content-Length: ' . filesize($file));
//  readfile($file);
//  exit;
}
