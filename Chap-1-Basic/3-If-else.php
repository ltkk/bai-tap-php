<?php

/**
 *  1. Viết chương trình so sánh 2 số 
 *  Input :  
 *         + firstNumber = 2;
 *         + secondNumber = 9;
 *  Output:
 *         + secondNumber lớn hơn firstNumber
 *
 *  Algorithm :
 *           ... 
 * 
 */

$firstNumber  = 2;
$secondNumber = 9;

if ($firstNumber > $secondNumber) {
    echo ('firstNumber lớn hơn secondNumber');
    echo ('<br /> -------------------------------------- <br />');

} else {
    echo ('secondNumber lớn hơn firstNumber');
    echo ('<br /> -------------------------------------- End Ex1. <br />');

}

/**
 *  2. Viết chương trình tìm max của 3 số 
 *  Input :  
 *         + firstNumber   = 2;
 *         + secondNumber   = 9;
 *         + thirdNumber = 4;
 *  Output:
 *         + Max là secondNumber
 */

 
$firstNumber   = 2;
$secondNumber   = 9;
$thirdNumber = 4;

$max = $firstNumber;

if ($max < $secondNumber) {
    $max = $secondNumber;

} 
if ($max < $thirdNumber){
    $max = $thirdNumber;
}
echo ("Số lớn nhất trong 3 số $firstNumber, $secondNumber, $thirdNumber là: $max");
echo ('<br /> -------------------------------------- End Ex2. <br />');

/**
 *  3. Viết chương trình tung đồng xu 
 *  Input :  
 *         + Coin 
 *         + Khi code được server xử lý -> Coin = rand(0,1) -> hàm rand sẽ trả về 0 hoặc 1
 *         + 0 = mặt sấp  
 *         + 1 = mặt ngửa 
 *  Output:
 *         + Ngẫu nhiễn sấp hoặc ngửa
 */

$Coin = null;
$Coin = rand(0,1);

if($Coin == 0){
    echo("Sấp");
    echo ('<br /> -------------------------------------- End Ex3. <br />');

}
else {
    echo("Ngửa");
    echo ('<br /> -------------------------------------- End Ex3. <br />');

}


/**
 *  4. Bài toán tính tiền taxi với số km cho trước 
 *  Input :  
 *         + 1km đầu giá = 15000 đ 
 *         + từ 1km đến 5km giá = 12000 đ 
 *         + từ 6km trở đi giá  = 90000 đ
 *         + từ 140km trở đi được giảm 12 % tổng tiền
 *  Output:
 *         + Số tiền cần thanh toán
 */

const FIRST_LEVEL  = 15000;
const SECOND_LEVEL = 12000;
const THIRD_LEVEL  = 90000;
const FOURTH_LEVEL = 12/100;

$numberKm   = 2; // Khai báo số km sẽ đi 
$amount     = 0;

if($numberKm <= 1){
    $amount = $numberKm * FIRST_LEVEL;
}
else if($numberKm <= 5){
    $amount =  1 * FIRST_LEVEL + ($numberKm  - 1) * SECOND_LEVEL;
}
else if($numberKm <= 140){
    $amount = 1 * FIRST_LEVEL + 4 * SECOND_LEVEL +  ($numberKm - 5) * THIRD_LEVEL;
}
else{
    $amount = (1 * FIRST_LEVEL + 4 * SECOND_LEVEL +  ($numberKm - 5) * THIRD_LEVEL) * FOURTH_LEVEL;
}

$amount = number_format($amount); // định dạng lại số tiền theo chuẩn 500000  = 500,000

echo("Số tiền khách phải trả khi đi $numberKm km là: $amount đ");
echo ('<br /> -------------------------------------- End Ex4. <br />');


