<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OpsWorks Book Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="assets/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
        
    <div class="page-header">
        <h3>OpsWorks Book Demo</h3>
    </div>
    
    <p class="lead">PHP demo page for use with AWS OpsWorks</p>
        
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="span2">Title</th>
                <th class="span5">Description</th>
                <th class="span4">URL</th>
                <th class="span1">View</th>
            </tr>
        </thead>

        <?php
                
            include("includes/dbconnect.php");

            $query = "SELECT * FROM templates";
            $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

            while($row = $result->fetch_assoc()) {
                    
        ?>

        <tbody>
            <tr>
                <td><?php echo stripslashes($row['title']); ?></td>
                <td><?php echo stripslashes($row['description']); ?></td>
                <td style="overflow: auto;"><a href="<?php echo stripslashes($row['url']); ?>"><?php echo stripslashes($row['url']); ?></a></td>
                <td><a class="btn btn-block btn-inverse" href="<?php echo stripslashes($row['url']); ?>" target="_blank">Go</a></td>
            </tr>
        </tbody>

        <?php 
                
            }
                
            mysqli_close($mysqli);
        
        ?>

    </table>

</div>
<!-- /.container -->

<br />

<div id="footer">
    
    <div class="container">
        <p class="muted credit">Example courtesy of <a href="http://ca.linkedin.com/in/toddrosner" target="_blank">Todd Rosner</a> from <a href="http://vivisurf.com" target="_blank">Vivisurf</a></p>   
        <a href="http://ca.linkedin.com/in/toddrosner"><img src="http://www.linkedin.com/img/webpromo/btn_viewmy_160x25.png" width="160" height="25" border="0" alt="View Todd Rosner's profile on LinkedIn"></a>
    </div>

</div>

<!-- Load JS here for greater good =============================-->
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-switch.js"></script>
<script src="js/flatui-checkbox.js"></script>
<script src="js/flatui-radio.js"></script>
<script src="js/jquery.tagsinput.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.stacktable.js"></script>

</body>

</html>
