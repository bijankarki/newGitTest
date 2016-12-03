<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('../class/class.sqlQuery.php');
include('../class/database.php');

echo $id = $_GET['id'];

$query = "delete from worklog where id='$id'";
$objqry -> insert($query);
header("Location: ../index.php?msg=successfully deleted");
exit;
?>