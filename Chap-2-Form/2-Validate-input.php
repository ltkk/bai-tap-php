<?php

/**
 *  Validate biểu mẫu thông tin cá nhân dưới đây
 */

function checkEmpty($input)
{
    if (empty($input) || $input == null) {
        return true;
    }
}

function checkNumber($input)
{
    if (is_numeric($input)) {
        return true;
    }
}
function checkPhone($input)
{
    if(!is_numeric($input)){
        return false;
    }
    if(strlen($input) > 13 || strlen($input) < 10){
        return false;
    }
    return true;
}

function checkEmail($input){
    return filter_var($input, FILTER_VALIDATE_EMAIL);
}


if (isset($_POST['submit'])) {
    $errors   = [];
    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $gender   = $_POST['gender'] ?? null;

    if (checkEmpty($fullname)) {
        $errors['fullname'] = ['fullname empty'];
    };
    if (checkEmpty($email)) {
        $errors['email']    = ['email empty'];
    };
    if (checkEmpty($phone)) {
        $errors['phone']    = ['phone empty'];
    };
    if (checkEmpty($gender)) {
        $errors['gender']   = ['gender empty'];
    };

    if (checkNumber($fullname)) {
        $errors['fullname'][] = 'fullname fatal';
    };

    if(!checkPhone($phone)){
        $errors['phone'][] = 'Số điện thoại không đúng định dạng';
    }
    if(!checkEmail($email)){
        $errors['email'][] = 'Email không đúng định dạng';

    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <?php if(isset($errors)): ?>
        <ul>
            <?php foreach($errors as $error): ?>
            <li><?php print_r($error) ?></li>
            <?php endforeach ?>
        </ul>
        <?php endif ?>
        <div>


            <label for="">Họ và Tên</label>
            <input type="text" name="fullname">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Số điện thoại</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="">Giới tính</label>
            Nam <input type="radio" name="gender">
            Nữ <input type="radio" name="gender">
        </div>
        <div>
            <input type="submit" value="Xác Nhận" name="submit">
        </div>
    </form>
</body>

</html>