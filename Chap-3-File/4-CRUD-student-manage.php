<?php

    /**
     * Get all sinh viên
     */
    $path = './student-list.txt';
    $students  = file($path);

    /**
     * Thêm sinh viên
     */
     if(isset($_POST['add-student'])){
        $fullname = $_POST['fullname'];
        $file     = fopen($path,'a');
        fwrite($file,"\n".$fullname);
        fclose($file);
        header('location:'. $_SERVER['HTTP_REFERER']);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý sinh viên</title>
</head>

<body>
    <h2>Danh sách sinh viên</h2>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>Họ tên</th>
        </tr>
        <?php foreach($students as $student):  ?>
        <tr>
            <td><?php echo($student) ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <h2>Thêm sinh viên</h2>
    <form action="" method="POST">
        <div>
            <label for="" >Họ tên</label>
            <input  type="text" name="fullname">
        </div>
        <input name="add-student" type="submit" value="Thêm">
    </form>
</body>

</html>