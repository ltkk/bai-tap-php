<?php 
/**
 * Xóa file "abc.txt"
 */

$filename = 'abc.txt';
$success = unlink($filename);

 if (!$success) {
 throw new Exception("Cannot delete $filename");
 }
 else 
 {
     echo('file '.$filename.'deleted !');
 }
