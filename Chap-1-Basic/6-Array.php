<?php
echo ('<h4> Bài Tập: Mảng</h4>');

/**
 *  1. Khởi tạo danh sách top 4 thần tượng được yêu thích nhất (Index Array)  
 */

$casts = [
    'Mikami Yua',
    'Takizawa laura',
    'Yui Hatano',
    'Maria Ozawa',
];

echo ('<pre>');
print_r($casts);
echo ('</pre>');
echo ('<br /> -------------------------------------- End Ex1. <br />');


/**
 *  2. Tạo profile của bạn (Associative Array)
 */

$profile = [
    'name'  => 'Anonymous 4',
    'birth' => '04/04/1997',
    'job'   => 'Hacker :))'
];

echo ('<pre>');
print_r($profile);
echo ('</pre>');
echo ('<br /> -------------------------------------- End Ex2. <br />');


/**
 *  3. Tạo danh sách 2 video youtube yêu thích (Mutidimensional Arrray)
 */

$posts = [
    [
        'title'      => 'HƯNG CAO - Q.L.C. (Prod. by Jay Bach) [OFFICIAL MV]',
        'url'        => 'https://www.youtube.com/watch?v=Udkz_Bo3AHE',
        'created_at' => '3 thg 2, 2019',
        'author'     => 'MC ILL'
    ],
    [
        'title'      => 'LỚN RỒI - DSK [Video Lyric HD]',
        'url'        => 'https://www.youtube.com/watch?v=tfKjamYnbP0',
        'created_at' => '19 thg 9, 2016',
        'author'     => 'DSK'
    ],
];

echo ('<pre>');
print_r($posts);
echo ('</pre>');
echo ('<br /> -------------------------------------- End Ex3.1. <br />');


/**
 *  4. CRUD Array (Thêm sửa xóa phần tử của mảng )
 */

$posts = [
    [
        'title'      => 'HƯNG CAO - Q.L.C. (Prod. by Jay Bach) [OFFICIAL MV]',
        'url'        => 'https://www.youtube.com/watch?v=Udkz_Bo3AHE',
        'created_at' => '3 thg 2, 2019',
        'author'     => 'MC ILL'
    ],
    [
        'title'      => 'LỚN RỒI - DSK [Video Lyric HD]',
        'url'        => 'https://www.youtube.com/watch?v=tfKjamYnbP0',
        'created_at' => '19 thg 9, 2016',
        'author'     => 'DSK'
    ],
];

/**
 * 4.1 Thêm một phần tử vào cuối danh sách $posts
 */

$posts[] = [
    'title'      => 'Chờ Anh Nhé - Hoàng Dũng ft. Hoàng Rob || Lyrics',
    'url'        => 'https://www.youtube.com/watch?v=kErpTLz39Ls',
    'created_at' => '15 thg 12, 2018',
    'author'     => 'Hoàng Dũng'
];

echo ('<pre>');
print_r($posts);
echo ('</pre>');
echo ('<br /> -------------------------------------- End Ex4.1. <br />');


/**
 * 4.1.2 Thêm một phần tử vào vị trí thứ 1 danh sách $posts
 */

/**
 * Cách 1: Sử dụng chỉ số index
 */


$length = count($posts);
for($i = $length; $i > 0; $i--){
        $posts[$i] = $posts[$i - 1] ;
}
$posts[0] = [
    'title'      => 'Có Chàng Trai Viết Lên Cây - Phan Mạnh Quỳnh | MẮT BIẾC OST 1',
    'url'        => 'https://www.youtube.com/watch?v=0VC6euBtKkk',
    'created_at' => '11 thg 12, 2019',
    'author'     => 'Phan Mạnh Quỳnh'
];

echo ('<pre>');
print_r($posts);
echo ('</pre>');
echo ('<br /> -------------------------------------- End Ex4.1.2 <br />');

/**
 * Cách 2: sử dụng hàm array_unshift() -> nên sử dụng
 */

array_unshift($posts,[
    'title'      => 'Có Chàng Trai Viết Lên Cây - Phan Mạnh Quỳnh | MẮT BIẾC OST 2',
    'url'        => 'https://www.youtube.com/watch?v=0VC6euBtKkk',
    'created_at' => '11 thg 12, 2019',
    'author'     => 'Phan Mạnh Quỳnh'
]);

echo ('<pre>');
print_r($posts);
echo ('</pre>');
echo ('<br /> -------------------------------------- End Ex4.1.2 <br />');



/**
 * 4.2 Cập nhật author của bài post vừa thêm vào danh sách $posts ở trên
 */

$posts[4]['author'] = 'Hoàng Dũng ft. Hoàng Rob';

echo ('<pre>');
print_r($posts);
echo ('</pre>');
echo ('<br /> -------------------------------------- End Ex4.2. <br />');


/**
 *  4.3 Xóa bài post vừa thêm vào danh sách $posts ở trên
 */

unset($posts[4]);
echo ('<pre>');
print_r($posts);
echo ('</pre>');
echo ('<br /> -------------------------------------- End Ex4.3. <br />');

/**
 * 5. Thêm một phần tử vào vị trí bất kì của mảng
 *
 */

 $number = [1,2,3,4,5];  

 $pos    = 3;
 $val    = 22;

array_splice($number,$pos,0,$val);

echo ('<pre>');
print_r($number);
echo ('</pre>');
echo ('<br /> -------------------------------------- End Ex5. <br />');


/**
 *  --> Hàm array_splice là một hàm rất hay ho nó có thể thêm sửa xóa phần tử mảng  
 */

/**
 *  6. Tìm kiếm phần tử trong mảng
 */

$products = [
    [
        'name' => 'Bphone-2019',
        'price' => 1000000,
    ],
    [
        'name' => 'Vsmart-Live',
        'price' => 3790000,
    ],
    [
        'name' => 'Vsmart-Active',
        'price' => 4890000,
    ],
];

/**
 * 6.1 Hiển thị phần tử đầu tiên của mảng
 */

/**
 * Cách 1. Sử dụng hàm reset 
 */

echo ('<pre>');
print_r(reset($products));
echo ('</pre>');
echo ('<br /> -------------------------------------- End Ex6.1. <br />');

/**
 * Cách 2. Sử dụng chỉ số index 0
 */

echo ('<pre>');
print_r($products[0]);
echo ('</pre>');
echo ('<br /> -------------------------------------- End Ex5.1. <br />');

/**
 * 6.2 Hiển thị key của phần tử trong mảng có giá trị là "blue"
 */

$color = ['one' => 'yellow' ,'two' =>  'blue'  ,'three' =>  'red' ];

 $key = array_search('blue', $color);
 echo$key;
 echo ('<br /> -------------------------------------- End Ex6.2.1. <br />');


 