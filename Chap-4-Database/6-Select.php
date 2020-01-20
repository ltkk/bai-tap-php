<?php 

    /**
     * Kết nối với csdl mysql : server name: 'localhost' , username: 'root',  password: '', database name: 'laptrinhnotkho'
     *
     */


    function dbConnect($servername, $username, $password, $dbname){
        $connect = new mysqli($servername,$username,$password,$dbname);
        return $connect;    
    }

    /**
     * Hiển thị danh sách tất cả bài viết trong bảng posts
     */

    $DB  = dbConnect('localhost','root','','laptrinhnotkho'); 

    $sql = "SELECT * FROM posts"; 
            
    $dataTable = $DB->query($sql);
    $posts = [];
    if($dataTable->num_rows > 0){
        while($record = $dataTable->fetch_object()){
            $posts[] =  $record;
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Danh sách bài viết</h2>
    <ul>
        <?php if(!empty($posts)):?>
        <?php foreach($posts as $post): ?>
            <li><?php echo($post->title) ?></li>
        <?php endforeach ?>
        <?php else: ?>
            <li>Không có bản ghi nào</li>
        <?php endif ?>
    </ul>
    
</body>
</html>