<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php require '../base.php'; ?>
    <link rel="stylesheet" href="css/admin_home.css">
    <script src="js/admin_home.js"></script>

</head>

<body>
    <div class="container">
        <div id="throbber" style="display:none; min-height:100%;"></div>
        <div id="noty-holder"></div>
        <div id="wrapper">
            <!-- Navigation -->
            <?php require "admin_header.php" ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row" id="main">
                        <div class="col-sm-12 col-md-12 well" id="content">
                            <h1>Welcome Admin!</h1>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div><!-- /#wrapper -->
    </div>
</body>
</html>