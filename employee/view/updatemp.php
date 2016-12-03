<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('../class/class.sqlQuery.php');
include('../class/database.php');

$query = "select id,name,work_title,duration from worklog where id=$_GET[id]";
$row = $objqry -> querySelectSingle($query);
//echo $row['name'];
//echo $row['work_title'];
?>
<html>
    <head>
        <title>Update Employee</title>
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
            <h3>Update employee's work log</h3>
            <div class="col-md-6" id="form">    
                <form role="form" action="../class/update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/>
                    <div class="form-group">
                        <label>Employee Full Name</label>
                        <input type="text" class="form-control" name="emp_name" value="<?php echo$row['name'] ?>">
                    </div >
                    <div class="form-group">
                        <label>Work Tile</label>
                        <input type="text" class="form-control" name="work_title" value="<?php echo$row['work_title'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Duration</label>
                        <input type="number" class="form-control" name="duration" value="<?php echo$row['duration'] ?>">
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