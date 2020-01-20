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
     * Thêm 3 bản ghi vào bảng posts 
     */

    $DB  = dbConnect('localhost','root','','laptrinhnotkho'); 

    $sql = "INSERT INTO posts(title,description,thumbnail,content) VALUES 
            ('bai viet 1', 'mo ta 1','url-1','noi dung 1'),
            ('bai viet 2', 'mo ta 2','url-2','noi dung 2'),
            ('bai viet 3', 'mo ta 3','url-3','noi dung 3')"; 
            
    $inserted = $DB->query($sql);
    if($inserted){
        echo('Thêm bản ghi thành công');
    }
    else{
        echo('Error');
    }