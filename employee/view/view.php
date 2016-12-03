<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('../class/class.sqlQuery.php');
include('../class/database.php');

$query = "select * from worklog";
$rows = $objqry -> querySelect($query);
//echo $row['name'];
//echo $row['work_title'];
?>
<html>
    <head>
        <title>Employee</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="../css/bootstrap-theme.css" />
        <link type="text/css" rel="stylesheet" href="../css/bootstrap-theme-min.css" />
        <link type="text/css" rel="stylesheet" href="../css/mycss.css"
    </head>
    <body>
        <div class="col-md-10"id="container">
            <div class="col-md-9">
                <h3>Displaying All Employees</h3>
                <table class="table-striped" width="100%">
                    <tr>
                        <th>Id</th><th>Name</th><th>work_title</th><th>duration</th><th>Manage</th>
                    </tr>
                    <?php
                    foreach ($rows as $row){
                        echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[work_title]</td><td>$row[duration]</td>"
                                . "<td><a href='updatemp.php?id=$row[id]'>update</a> &nbsp;"
                                . "<a href='../class/delete.php?id=$row[id]'>delete</a></td></tr>";
                    }
                    ?>
        </table>
            </div>
        </div>
        
        
</body>
</html>