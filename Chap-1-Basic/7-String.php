<?php
echo ('<h4> Bài Tập: String</h4>');

/**
 * 1. Xác định số phần tử của chuỗi
 */

 $laptrinhnotkho = 'Nguyenvanhieu.vn';

 /**
  * Cách 1: sử dụng hàm strlen (string length)
  */

 echo('Số phần tử của chuỗi: '.strlen($laptrinhnotkho)); 

 echo ('<br /> -------------------------------------- End Ex1. <br />');

 /**
  * Cách 2: sử dụng hàm str_plit để chuyển đổi chuỗi thành mảng và sử dụng hàm count để xác định độ dài của mảng
  */

 echo('Số phần tử của chuỗi: '.count(str_split($laptrinhnotkho))); 

 echo ('<br /> -------------------------------------- End Ex1. <br />');

 /**
 * 2. Xác định số từ của chuỗi
 */

 $laptrinhnotkho = 'Why oh why tell me why not me';

 /**
  * Cách 1: sử dụng hàm str_word_count 
  */

 echo('Số từ trong chuỗi: '.str_word_count($laptrinhnotkho).' từ'); 

 echo ('<br /> -------------------------------------- End Ex2. <br />');

 /**
  * Cách 2: sử dụng hàm explode để chuyển đổi chuỗi thành mảng và sử dụng hàm count để xác định độ dài của mảng
  */

 echo('Số từ trong chuỗi: '.count(explode(' ',$laptrinhnotkho)).' từ'); 

 echo ('<br /> -------------------------------------- End Ex2. <br />');

 /**
 * 3. Cắt chuỗi Nguyenvanhieu ra khỏi chuỗi "Nguyenvanhieu.vn"
 */

$laptrinhnotkho = 'Nguyenvanhieu.vn';

/**
  * Cách 1: Sử dụng hàm substr(str,vị trí cắt, độ dài chuỗi cắt)  
  */

$laptrinhnotkho = substr($laptrinhnotkho,0,13);
echo $laptrinhnotkho;
echo ('<br /> -------------------------------------- End Ex2. <br />');

/**
  * Cách 1: Sử dụng hàm substr(str,vị trí cắt, tham số âm -- vị trí cắt tính từ cuối chuỗi)  
  */

$laptrinhnotkho = 'Nguyenvanhieu.vn';
$laptrinhnotkho = substr($laptrinhnotkho,0,-2);
echo $laptrinhnotkho;