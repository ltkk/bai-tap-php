
<?php
echo ('<h4> Bài Tập: Vòng lặp</h4>');
/**
 *  1. Bài tập tính tổng : S = 1 + 2 + 3 + 4 + ... + n  
 *  Input :  
 *         + Khai báo n 
 *  Output:
 *         + Kết quả của biểu thức S 
 *  
 *  Algorithm :
 *           . Khai báo biến $n 
 *           . Khai báo biến $total = 0
 *           . Sử dụng vòng lặp for 
 *           . Cộng dồn biến $total qua mỗi bước lặp   
 */


$n     = 100;
$total = 0;

for ($i = 1; $i <= $n; $i++) {
    $total += $i;
}

echo ("Kết quả của biểu thức s = 1 + 2 + 3 + ... + $n là: $total");
echo ('<br /> -------------------------------------- End Ex1. <br />');

/**
 *  2. Tính tổng : S = 1 + 1*2 + 1*2*3 + 1*2*3*4 + ... + 1*2*3*4*...*n  
 *  Input :  
 *         + Khai báo n 
 *  Output:
 *         + Kết quả của biểu thức S 
 * 
 *  Algorithm :
 *           . Khai báo biến $n 
 *           . Khai báo biến $total    = 0
 *           . Sử dụng vòng lặp for lồng 
 *           . Với i số lần lặp bằng $n 
 *           . Khai báo biến $multiply = 1  (phép nhân với 1 = chính nó với 0 = 0)
 *           . Với j số lần lặp bằng $i 
 *           . Nhân dồn biến $multiply với $j qua mỗi bước lặp $j   
 *           . Cộng dồn biến $total với $multiply qua mỗi bước lặp $i   
 */

$n        = 6;
$total    = 0;
for ($i = 1; $i <= $n; $i++) {
    $multiply = 1;
    for ($j = 1; $j <= $i; $j++) {
        $multiply *= $j;
    }
    $total += $multiply;
}
echo ("<p> Kết quả của biểu thức S = 1 + 1*2 + 1*2*3 + 1*2*3*4 + ... + 1*2*3*4*...*$n là: $total </p>");
echo ('<br /> -------------------------------------- End Ex2. <br />');

/**
 *  3. Tính tổng số nguyên lẻ tử 1 -> n     
 *  Input :  
 *         + Khai báo n 
 *  Output:
 *         + Kết quả của biểu thức S 
 *  
 *  Algorithm :
 *           . Khai báo biến $n 
 *           . Khai báo biến $total = 0
 *           . Sử dụng vòng lặp for 
 *           . Kiểm tra điều kiện nếu $i là số lẻ ( $i % 2 == 1)
 *           -> Cộng dồn biến $total với $i    
 */


$n     = 5;
$total = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 1) {
        $total += $i;
    }
}
echo ("<p> Kết quả của biểu thức S = 1 + 3 + .. + $n là  : $total </p>");
echo ('<br /> -------------------------------------- End Ex3. <br />');

/**
 *  4. Tính tổng số nguyên chẵn tử 1 -> n     
 *  Input :  
 *         + Khai báo n 
 *  Output:
 *         + Kết quả của biểu thức S 
 *  
 *  Algorithm :
 *           . Khai báo biến $n 
 *           . Khai báo biến $total = 0
 *           . Sử dụng vòng lặp for 
 *           . ở biểu thức 3 của vòng lặp for gán $i = $i + 2 
 *           . Cộng dồn biến $total với $i    
 */


$n     = 5;
$total = 0;
for ($i = 0; $i <= $n; $i += 2) {
    $total += $i;
}

echo ("<p> Kết quả của biểu thức S = 0 + 2 + .. + $n là  : $total </p>");
echo ('<br /> -------------------------------------- End Ex4. <br />');

/**
 *  5. Bài tập tính S = 1! + 2! + 3! + ... + n! (sử dụng vòng lặp while)
 *  Input :  
 *         + Khai báo n 
 *  Output:
 *         + Kết quả của biểu thức S 
 *  
 *  Algorithm :
 *           . Khai báo biến $n 
 *           . Khai báo biến $total = 0
 *           . Khai báo biến $i     = 1
 *           . Sử dụng 2 vòng lặp while lồng nhau
 *           . Vòng lặp với $i lặp theo điều kiện ($i <= $n)
 *           -> Khai báo biến $j        = 1 (giá trị khởi tạo cho vòng lặp while lồng bên trong)
 *           -> Khai báo biến $multiply = 1 (giá trị của giai thừa) 
 *           . Vòng lặp với $i lặp theo điều kiện ($j <= $i)
 *           --> nhân dồn $multiply với $j
 *           -> Cộng dồn $total với $multiply
 */

$n     = 3;
$total = 0;
$i     = 1;
while ($i <= $n) {
    $j        = 1;
    $multiply = 1;
    while ($j <= $i) {
        $multiply *= $j;
        $j++;
    }
    $total += $multiply;
    $i++;
}

echo ("<p> Kết quả của biểu thức S = 1 + 2! + .. + $n! là  : $total </p>");
echo ('<br /> -------------------------------------- End Ex5. <br />');


/***
 *  6. Kiểm tra một số có phải là số nguyên tố hay không (sử dụng vòng lặp while)
 *  Input :  
 *         + Khai báo number 
 *  Output:
 *         + Xác định $number có phải là số nguyên tố hay không ?
 *  
 *  Algorithm :
 *           - Số nguyên tố là số chia hết cho một và chính nó 
 *           . Khai báo biến $number 
 *           . Khai báo biến $i       = 1
 *           . Khai báo biến $isPrime = true
 *           . Sử dụng vòng lặp while 
 *           . Lặp với theo điều kiện ($i < $number)
 *           -> Kiểm tra điều kiện $number % $i == 0 => gán $isPrime = false và break thoát khỏi vòng lặp while
 *           -> Nếu điều kiện $number % $i == 0 không xảy ra => $isPrime = true không thay đổi
 *           . Kiểm tra điều kiện $isPrime 
 *           -> true  => $number là số nguyên tố
 *           -> false => $number không phải là số nguyên tố
 */

$number  = 13;
$i       = 2;
$isPrime = true;
while ($i < $number) {
    if ($number % $i == 0) {
        $isPrime = false;
        break;
    }
    $i++;
}

if ($isPrime) {
    echo ("$number là sô nguyên tố");
    echo ('<br /> -------------------------------------- End Ex6. <br />');
} else {
    echo ("$number không phải là sô nguyên tố");
    echo ('<br /> -------------------------------------- End Ex6. <br />');
}


/**
 *  7. In ra tất cả số nguyên tố nhỏ hơn n (sử dụng vòng lặp for)
 *  Input :  
 *         + Khai báo number 
 *  Output:
 *         + Xác định $number có phải là số nguyên tố hay không ?
 *  
 *  Algorithm :
 *           - Số nguyên tố là số chia hết cho một và chính nó 
 *           . Khai báo biến $n 
 *           . Khai báo chuỗi $listPrime = ''
 *           . Sử dụng vòng lặp for với điều kiện ($i < $n)
 *           -> Gán $isPrime = true 
 *           . Sử dụng vòng lặp for với điều kiện ($j < $i)
 *           . Kiểm tra điều kiện $i % j != 0 
 *           -> true  => continue bỏ qua bước lặp hiện tại
 *           -> false => thực thi câu lệnh tiếp theo gán $isPrime = false
 *           . Quay lại vòng lặp for với điều kiện ($j < $i)
 *           . Kiểm tra điều kiện $isPrime 
 *           -> true  => Nối chuỗi $i vào $listPrime
 *           -> false => thì thôi :)
 */

$n         = 12;
$listPrime = '';

for ($i = 2; $i < $n; $i++) {
    $isPrime   = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j != 0) {
            continue;
        }
        $isPrime = false;
    }
    if ($isPrime) {
        $listPrime  .= "$i, ";
    }
}

echo ("Các số nguyên tố trong khoảng [1, $n]: $listPrime");
echo ('<br /> -------------------------------------- End Ex7. <br />');


/**
 *  8. Vẽ tam giác cân
 *  Input :  
 *         + Khai báo width, height 
 *  Output:
 *         + Vẽ tam giác cân
 *  
 *  Algorithm :
 *           . Khai báo width , height 
 *           . Sử dụng hai vòng lặp while lồng nhau   
 *           . Vòng lặp while với điều kiện $i <= $height    
 */

        /**   0001
         *    00111                   h = 4  đáy = 7   
         *    011111
         *    1111111
         */    

$height = 4; 
$width  = 7;
$i = 1; 
while($i <= $height){
    $j = 1;
    while($j <= $width - $height + $i){
        if($j + $i  <= $width - $height  + 1){
            echo('0');
        }
        else {
            echo('1');
        }
        $j ++;
    }
    echo('<br />');
    $i++;
}
echo ('<br /> -------------------------------------- End Ex8. <br />');


/**
 *  2. Bài tập in bảng cửu chương bằng vòng lặp for
 * 
 */

$multiplicationTable = '<table><tr><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>6</th><th>7</th><th>8</th><th>9</th></tr>';
for ($i = 1; $i <= 9; $i++) {
    $multiplicationTable .= '<tr>';
    for ($j = 1; $j <= 9; $j++) {
        $multiplicationTable .= "<td> $j x $i = " . $i * $j . "</td>";
    }
    $multiplicationTable .= "</tr>";
}

echo ("Bảng cửu chương <br />");
echo $multiplicationTable;
