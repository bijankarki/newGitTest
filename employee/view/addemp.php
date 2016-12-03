<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('../class/class.sqlQuery.php');
include('../class/database.php');

$query = "insert into worklog (`name`,`work_title`,`duration`)values('Bijan','SQL Server',2)";
//$objqry -> insert($query);
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
        <link type="text/css" rel="stylesheet" href="../css/mycss.css" />
    </head>
    <body>
        <div class="col-md-10"id="container">
            <h3>Add new employee's work log details</h3>
            <div class="col-md-6" id="form">    
                <form role="form" action="../class/insert.php" method="get">
                    <div class="form-group">
                        <label>Employee Full Name</label>
                        <input type="text" class="form-control" name="emp_name" >
                    </div >
                    <div class="form-group">
                        <label>Work Tile</label>
                        <input type="text" class="form-control" name="work_title">
                    </div>
                    <div class="form-group">
                        <label>Duration</label>
                        <input type="number" class="form-control" name="duration">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-default">Submit</button>
                        <button type="reset" class="btn-default">Clear</button>
                        <button type="button" class="btn-default" onclick="parent.location='../'">Cancel</button>
                    </div>
                    <p id="display-status">
                        <?php if(isset($_GET['msg'])){echo $_GET['msg']."!!";}?>
                    </p>
                </form>
            </div>
        </div>
        
    </body>
</html>