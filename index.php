<?php
    include_once 'classes.php';
    $user = new User('Bob', 'bob@bob.bob');
    echo $user;
    echo $user->Name;
    echo $user->name.'<br>';
    $user->Name = 'Clark';
    echo $user.'<br>';
    echo $user->Email.'<br>';
    if(isset($user->email)){
        echo 'Email success<br>';
    }
    else{
        echo 'Not exists<br>';
    }
    file_put_contents('serialize.txt',serialize($user).PHP_EOL);
    echo serialize($user).'<br>';
    echo $user->getNameToUpperCase('hello trinity');
?>