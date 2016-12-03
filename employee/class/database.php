<?php
//$config['server']='binod.powwebmysql.com';
//$config['username']='edusoft';
//$config['password']='$soft123';
//$config['database']='softedu';


$config['server']="localhost";
//$config['username']="softnepa_user";
$config['username']="root";
//$config['password']="root@135";
$config['password']="";
$config['database']="employee";	

//mysql_connect($config['server'],$config['username'],$config['password']);
//mysql_select_db("ekoseli");

$objqry = new sqlQuery($config['server'],$config['username'],$config['password'],$config['database']);
//$GLOBALS['objqry'] = &$objqry;

?>