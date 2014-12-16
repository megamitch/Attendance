<?php
//contains credentials to connect to database
$adapter=new Zend\Db\Adapter\Adapter([
    'driver'=>'Mysql',
    'database'=>'mmci_attendance',
    'username'=>'root',
    'password'=>'Megamitch123!!'
])
        
return $adapter;
?>