<?php

$host="localhost";
$dbuser="root";
$dbpass="";
$dbname="spport";



//mysqli

@$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$con){
    
    echo 'nooo connect';
    
}
else{
    echo 'good connect';
}



//pdo