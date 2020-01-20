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
     * Cập nhật content bản ghi có id = 3 -> 'Nội dung đang chỉnh sửa'
     */

    $DB  = dbConnect('localhost','root','','laptrinhnotkho'); 

    $sql = "UPDATE posts SET content = 'Nội dung đang chỉnh sửa' WHERE id = 3 "; 
            
    $updated = $DB->query($sql);
    if($updated){
        echo('Cập nhật ghi thành công');
    }
    else{
        echo('Error');
    }