<?php
$dsn = 'mysql:dbname=blog;host=127.0.0.1';
$user = 'root';
$password = '';

$myDB = new PDO($dsn,$user,$password);

$sql = "select * from posts";

function fetch_post(){
    global $myDB;
    return $myDB->query("select * from posts");
}

function fetch_posts($post) {
    global $myDB;
    
    //$sql = "select * from posts where id = {$post}";
    $sql = $myDB->prepare("select * from posts where id = ?");
    $sql->execute([$post]);
    //$ergebnis = $myDB->query($sql);
    
    //return $ergebnis->fetch();
    return $sql->fetch();
}


?>