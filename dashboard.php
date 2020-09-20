<?php
$servername = "localhost";
$username = "prakrtpd_aduser";
$password = "pEQHinK5qsGT";
$database = "prakrtpd_skadam";

// Create connection
$conn = mysql_connect($servername, $username, $password) or die("Could not connect database");
mysql_select_db($database,$conn) or die("Could not connect database");




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Voter Details</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <!--data table-->
  <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start
        <div class="logo">
            <a href="dashboard.php"><img src="images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="dashboard.php"><img src="images/logo_icon.png" alt=""></a>
        </div>
        logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">Admin</a></h4>
                        
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
           
            </div>

            <!--sidebar nav start-->
          <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="dashboard.php"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                </li>
                <li><a href="voter_details.php"><i class="fa fa-home"></i> <span>Votar Details</span></a>
                </li>
               <li><a href="log_out.php"><i class="fa fa-home"></i> <span>Log Out</span></a>
                </li>
             
        </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                   Voter Details
                   
                </header>
                <div class="panel-body">
                <div class="adv-table editable-table ">
                <div class="clearfix">
                
                 
                </div>
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                <tr>
                    <th>आडनाव</th>
                    <th>पहिले नाव</th>
                    <th>मधले नाव</th>
                    <th>मतदाता क्रमांक</th>
                    <th>मोबाईल नंबर</th>
                    <th>पत्ता</th>
                    <th>कोण ?</th>
                   
                </tr>
                </thead>
                <tbody>
                    
                               
                     <?php
                   
                    
                      $qry1=mysql_query("select * from entry where ");
                        while($row=mysql_fetch_array($qry1))
                        {   
                          $d1=$row['l_name'];
                          $d2=$row['f_name'];
                          $d3=$row['m_name'];
                          $d4=$row['voter_id'];
                          $d5=$row['contact_no'];
                          $d6=$row['address'];
                          $d7=$row['address_type'];



                           echo "
                           <tr class=''>
                           <td>$d1</td>
                           <td>$d2</td>
                           <td>$d3</td>
                           <td>$d4</td>
                           <td>$d5</td>
                           <td>$d6</td>
                           <td>$d7</td>
                           </tr> ";
                        }
                     ?>
               
                </tbody>
                    

                </table>
                </div>
                </div>
                </section>
                </div>
                </div>
        </div>
        <!--body wrapper end-->
<!--Modal start--->


        <!--footer section start-->
        <footer>
            2014 &copy; Social Management by Prakrut
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!--data table-->
<script type="text/javascript" src="js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<!--script for editable table-->
<script src="js/editable-table.js"></script>

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>
    
   



</body>
</html>

