<?php
try{
$db=new PDO("mysql:hostname=localhost;dbname=cart;charset=utf8","root","");
//echo "Veritabanı bağlantısı başarılı";
}  catch(PDOException $e){
    echo $e->getMessage();
}




