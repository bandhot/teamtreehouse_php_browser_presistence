<?php
$password="paSword";

$encrypt_password=password_hash($password,PASSWORD_BCRYPT);

// echo $encrypt_password;

if(password_verify('paSword',$encrypt_password)){
    echo "you have acces to this page";
}else{
    echo "you dont acces to this page";
}
