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
     * Xóa bản ghi có id = 3 trong table posts '
     */

    $DB  = dbConnect('localhost','root','','laptrinhnotkho'); 

    $sql = "DELETE FROM posts WHERE id = 3 "; 
            
    $deleted = $DB->query($sql);
    if($deleted){
        echo('Xóa ghi thành công');
    }
    else{
        echo('Error');
    }