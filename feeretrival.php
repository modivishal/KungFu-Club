<?php require('includes/config.php'); 

//if not logged in redirect to login page
//if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
// $title = 'Members Page';

//    $dbhost = 'localhost';
//    $dbuser = 'root';
//    $dbpass = '';
   
//    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
//    if(! $conn ) {
//       die('Could not connect: ' . mysql_error());
//    }
   
//    $sql = 'SELECT rank_num, rank_points, rank_name, rank_belt FROM rank';
//    mysql_select_db('kungfu');
//    $retval = mysql_query( $sql, $conn );
   
//    if(! $retval ) {
//       die('Could not get data: ' . mysql_error());
//    }
   
//    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
//        $rank_num = $row['rank_num'];
//        $rank_points = $row['rank_points'];
//        $rank_name = $row['rank_name'];
//        $rank_belt = $row['rank_belt'];
 
//    }
     
//    mysql_close($conn);

//include header template
//require('layout/header.php'); 
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My KungFu Club</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.html">Kung Fu Club 

                </a>
            </div>

            <div class="notifications-wrapper">
<ul class="nav">
               
             
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user-plus"></i> My Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
               
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/ninja.gif" class="img-circle" />

                           
                        </div>

                    </li>
                     <li>
                        <a  href="#"> <strong> Unnit Metaliya </strong></a>
                    </li>

                    <li>
                        <a class="active-menu"  href="admin.php"><i class="fa fa-dashboard "></i>Admin Dashboard</a>
                    </li>
                    <li>
                        <a href="ui.html"><i class="fa fa-venus "></i>Membership Info</a>
                        
                    </li>
                    
            
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ADMIN DASHBOARD</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                <div class="row">
            <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-one">
                            <a href="retrivestudents.php">
                                <span class="glyphicon glyphicon-refresh"></span>
                                 <h5>Retrive All Students</h5>
                            </a>
                        </div>
                        </div>
              <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-two">
                            <a href="retriveparents.php">
                                <span class="glyphicon glyphicon-flag"></span>
                                 <h5>Retrive All Parents</h5>
                            </a>
                        </div>
                        </div>
             <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-three">
                            <a href="#">
                                <span class="glyphicon glyphicon-usd"></span>
                                 <h5>Fees Received</h5>
                            </a>
                        </div>
                        </div>
              <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-four">
                            <a href="customretrival.php">
                                <span class="glyphicon glyphicon-cog"></span>
                                <h5>Custom Retrival</h5>
                            </a>
                        </div>
                        </div>      
            </div>
                 <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>   

                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="customfee.php">
                            Select students who have paid greater than:&nbsp; <input type="number" name="startrange"> &nbsp; and less than
                            <input type="number" name="endrange">
                            <button type="submit" name="submit">Submit</button>
                            <br><br><br>
                        </form>
                    </div>
                </div>  

                <div class=" col-md-12">
                <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                
                                <thead>
                                    <tr>
                                        <th>Fee Receipt Number</th>
                                        <th>Student Number</th>
                                        <th>Fee Amount ($)</th>
                                        <th>Fee Description</th>
                                        <th>Fee Date</th>
                                    </tr>
                                </thead>
<?php
$dbLink = new mysqli('127.0.0.1', 'root', '', 'kungfu');

if(mysqli_connect_errno()) {     
  
  die("MySQL connection failed: ".mysqli_connect_error());
}  

// Query for a list of all existing files
if (isset($_POST['submit'])) {
    # code...
}
$sql = 'SELECT `fee_receipt_num`,`stud_num`,`fee_amount`,`fee_description`, `fee_date` FROM `fee`';
$result = $dbLink->query($sql); 

 // Check if it was successfull

if($result) {  

   // Make sure there are some files in there
 
    if($result->num_rows == 0) {
    
          echo '<p>No Info. Sorry!</p>';
    } 
        else {        
                // echo '<table width="100%">
                //           <tr style="background-color:#21b6a8">
                //             <td><b>Subject</b></td>
                //             <td><b>Title</b></td> 
                //             <td><b>Notice</b></td>
                //           </tr>';
        

                    while($row = $result->fetch_assoc()){
         
                                                           echo "<tr>";

                                                              echo "<td>{$row['fee_receipt_num']}</td>";
                                                              echo "<td>{$row['stud_num']}</td>";
                                                              echo "<td>{$row['fee_amount']}</td>";
                                                              echo "<td>{$row['fee_description']}</td>";
                                                              echo "<td>{$row['fee_date']}</td>";
                
                                                              echo  "</tr>";
                    }         
        
                 echo '</table>';
    }      

    // Free the result
    $result->free(); } 

    else {   
      echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}  
// Close the mysql connection $dbLink->close(); 
?>

                            </table>
                        </div>

                        </div>
              
             
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
        </div>
    <!-- /. WRAPPER  -->
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
