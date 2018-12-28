<?php

$userpass=array('admin',
    '123456'
);

if(!$_POST['username'] || !$_POST['upass']){
    echo"请输入账号密码";
}else{
//不为空，判断密码是否正确
    $username=$_POST['username'];
    $password=$_POST['upass'];
    if($userpass[$username]==$password){
        echo"$username,你好";
    }


    else{
        echo"账号密码不正确";
    }
}
?>