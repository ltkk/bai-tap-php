<?php

/**
 *  1. Viết chương trình tính tuổi của tôi
 *  Input :  
 *         + Năm sinh    
 *         + Năm hiện tại
 *  Output:
 *         + Tuổi hiện tại
 * 
 *  Algorithm :
 *           . Tuổi = năm hiện tại - năm sinh
 *           -> sử dụng hàm date('Y') để lấy năm hiện tại
 */


$myYear      = 1996;
$currentYear = date('Y');
$myAge       = $currentYear - $myYear;
echo ('Tuổi của tôi là: ' . $myAge . ' tuổi');

echo ('<br /> -------------------------------------- <br />');

/**
 *  2. Viết chương trình tính diện tích hình chữ nhật
 *  Input :  
 *         + Chiều dài
 *         + Chiều rộng
 *  Output:
 *         + Diện tích
 * 
 *  Algorithm :
 *           . Diện tích = Chiều dài * chiều rộng
 */

$height  = 10;
$width   = 5;
$area    = $height * $width;
echo ('Diện tích hình chữ nhật có chiều dài '.$height.' cm và chiều rộng '.$width.' cm là: ' . $area . ' cm');

echo ('<br /> -------------------------------------- <br />');

/**
 *  --> Đến đây thì các bạn nên làm thêm những bài như tính diện tích, chu vi (HÌNH VUÔNG, HÌNH TRÒN, ...) 
 *  --> Trước tiên là để thuộc và hiểu sau
 *  --> Khi học một cái gì đó thì trước tiên hãy học thuộc rồi hiểu sau cũng k sao cả (Kiểu gì mà không phải học thuộc để làm)
 * 
 * /


 *  3. Viết chương trình hoán vị 2 số 
 *  Input :  
 *         + firstNumber  = 4; 
 *         + secondNumber = 8; 
 *  Output:
 *         + fistNumber   = 8;
 *         + secondNumber = 4;
 * 
 *  Algorithm :
 *          . Tạo thêm biến để gán giá trị tạm thời
 */
 
$firstNumber  = 4;
$secondNumber = 8;
echo("Số thứ nhất = $firstNumber và số thứ hai = $secondNumber <br />");

$temp         = $firstNumber;
$firstNumber  = $secondNumber;
$secondNumber = $temp;

echo("Kết quả sau khi hoán vị là: Số thứ nhất = $firstNumber, số thứ hai = $secondNumber");
echo ('<br /> -------------------------------------- <br />');

/**  
*  4. Viết chương trình hoán vị 2 số không tạo thêm biến temp 
*  Input :  
*         + firstNumber  = 29; 
*         + secondNumber = 4; 
*  Output:
*         + fistNumber   = 4;
*         + secondNumber = 29;
* 
*  Algorithm :
*          . Sử dụng toán tử (+ - / * %) 
*/

$firstNumber  = 29;
$secondNumber = 4;
echo("Số thứ nhất = $firstNumber và số thứ hai = $secondNumber <br />");

$firstNumber  = $firstNumber * $secondNumber;
$secondNumber = $firstNumber / $secondNumber;
$firstNumber  = $firstNumber / $secondNumber;
echo("Kết quả sau khi hoán vị là: Số thứ nhất = $firstNumber, số thứ hai = $secondNumber");
echo ('<br /> -------------------------------------- <br />');
