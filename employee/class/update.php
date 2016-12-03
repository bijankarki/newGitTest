<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('../class/class.sqlQuery.php');
include('../class/database.php');

echo $id = $_POST['id'];
echo $name = $_POST['emp_name'];
echo $worktitle = $_POST['work_title'];
echo $duration = $_POST['duration'];

$query = "update worklog set name='$name',work_title='$worktitle',duration='$duration' where id=$id";
$objqry -> insert($query);
header("Location: ../index.php?msg=Updated success");
?>
