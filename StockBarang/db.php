<?php

$DBHOST = 'localhost:3307';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'db_stock_barang';


$db_connect = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME);

if(mysqli_connect_errno()){
    echo "failed connect to mysql ".mysqli_connect_error(); 
}
