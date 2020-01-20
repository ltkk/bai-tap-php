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
     * Kiểm tra kết nối
     */
    if(dbConnect('localhost','root','','laptrinhnotkho')){
        echo('Kết nối database thành công');
    }

