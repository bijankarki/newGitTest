<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->         
<html>
    <head>
        <title>Employee</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme-min.css" />
        <link type="text/css" rel="stylesheet" href="css/mycss.css"/>
        
    </head>
    <body>
        <div class="col-md-10"  id="container">
            <h2>Employee Dashboard</h2>
            <div class="col-md-6" id="btnarea">
                <button class="btn-default" onclick="location.href='view/addemp.php'">Add New Employee</a></button>
                <button class="btn-default" onclick="location.href='view/view.php'">View All Employee</button>
            </div>
            <p id="display-status"> 
            <?php 
            if(isset($_GET['msg']))
                {echo $_GET['msg']." !!";} 
            ?> 
            </p>
                        
        </div>
    </body>
    
    
</html>
