<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE  | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
   <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style type="text/css">
          #table1{
           
           width: 100%;
           height: 100%;
           border-collapse: collapse;
          }

        #table1 , td
        {
          border: 2px solid gray;
          background-color: lightgray;
         
        }

        #th1{
border: 3px solid gray;
         /* background-color: #5081B4;*/
          background-color: #223E5D ;
          color: white;
         
        }

#table {
  border-collapse: collapse;
}

        #table2 , .td2{
           background-color: lightblue;
            border: 2px solid gray;
           width: 100%;
        }

        #daytd{
          background-color: #6C9DD0 ;
        }


         #Classtd{
          /*background-color: #6C9DD0 ;


*/    background-color:#49535E  ;color: white;    }

        #ttdata{
height:15px;
        max-height: 15px;

        }

    .tr1{
color: blue;
    }
        </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Admin</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            
           
              </li>
                <!-- inner menu: contains the actual data -->
               
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/index.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/index.jpg" class="img-circle" alt="User Image">

             <p>
                KTHM COLLEGE, Nashik
                 </p>
              </li>
              
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right" id="logout">
                  <a href="index.php" class="btn btn-default btn-flat" style="color: red">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>

    </nav>
  </header>


  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/index.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div><br><br>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i>
             <span>Master Timetable</span> </a>   
      </li>
        
    
        <li>
          <a href="addttdemo.php">
          <i class="fa fa-files-o"></i>
            <span>Add Timetable</span> </a>
         </li>

        <li>
           <a href="classroom.php">
          <i class="fa fa-th"></i>
         <span>Classroom</span>  </a>
        </li>
          
        <li>
          <a href="lab.php">
          <i class="fa fa-pie-chart"></i>
           <span>Labs</span></a> 
      </li>
          
        <li>
          <a href="staff.php">
           <i class="glyphicon glyphicon-user"></i>
            <span>Staff</span> </a> 
        </li>
        
        <li>
          <a href="subject.php">
           <i class="app-menu__icon fa fa-files-o"></i>
            <span>Subject</span> </a> 
        </li>

        <li>
          <a href="time.php">
           <i class="glyphicon glyphicon-time"></i>
            <span>Time</span> </a> 
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  
  <div class="content-wrapper" style="height: 100%;">
    
    <section class="content-header">
      <h1> Master Timetable </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Master Timetable</li>
      </ol>
    </section><hr><hr>

   
 <?php

include "database.php";

    
    
    ?>
                <form name="day" method="post" action="">
                <div class="form-group col-md-4" name="day">
                  <label class="control-label">Day</label>
                  <select class="form-control" name="day" id="day" onblur="" required="true">
                  <option value="" >Select Day</option>
                     <option value="all">All Day</option>
                  <?php
                  $query = mysqli_query($connection,"SELECT days FROM days");

                  if($query) {
                  while($row = mysqli_fetch_array($query)){
                  ?> 
                  <option value="<?php echo $row['days']; ?>"><?php echo $row['days']; ?></option>
                <?php }
                }
               ?>
                  </select>
                </div>


                  <div class="form-group col-md-4">
                  <label class="control-label">Class</label>
                  <select class="form-control" name="class" id="class" onblur="" required="true">
                  <option value="">Select Class</option>
                  <option value="all">All Class</option>
                  <?php
     $query_class = mysqli_query($connection,"SELECT class FROM class");

if($query_class) {
                  while($row_class = mysqli_fetch_array($query_class)){
                  ?> 
                  <option value="<?php echo $row_class['class']; ?>"><?php echo $row_class['class']; ?></option>
                <?php }
                }
               ?>
                  </select>
                </div>
              <br>

<button class="btn btn-danger" type="submit" name="submit" id="submit" style="float: right;"><i class="fa fa-fw fa-lg fa-check-circle" ></i>Submit</button></form>


 <div class="form-group col-md-12"><hr></div>

               <div id="purDetail" class="purDetail col-md-12 form-group" style="margin-top: 2px; margin-bottom: 2px;  margin-left: 5px; max-height: 800px; " >
                  </div>
     
              
                                
  <?php 
include "database.php";
if(isset($_POST['submit']))
{

  $day=$_POST['day'];
  $class=$_POST['class'];
 
}else
{
  $day="all";
  $class="all";
  
}

echo "<div class='col-sm-12' ><center><h2>Day: ".$day.",  Class: ".$class."</h2></center></div>";

//echo "<table id='table1'><tr><td>Days</td><td>Class</td>";
echo "<div  ><table id='table1'><tr><th id='th1'>Day</th><th id='th1'>Class</th>";



 $timequery1 = mysqli_query($connection,"SELECT timeslot From timeslot");

   while($timedata1=mysqli_fetch_array($timequery1))
   {
    echo "<th id='th1' >".$timedata1['timeslot']."</th>";
   }
echo "</tr>";


//if(($class=="all") && ($day=="all"))
if($day=="all")
{
  $query = mysqli_query($connection,"SELECT Distinct(days) FROM days");
}else{
  $query=mysqli_query($connection,"SELECT days FROM days WHERE days='$day'");
}

while($dayrow=mysqli_fetch_array($query))
{
   echo "<tr id='tr1'><td id='daytd'><h4>".$dayrow['days']."</h4></td><td ><table id='table1' >";

if($class=="all")
{
   $classquery1=mysqli_query($connection,"SELECT class From class");
 }else
 {
    $classquery1=mysqli_query($connection,"SELECT class From class WHERE class='$class'");
 }
   while($classdata1=mysqli_fetch_array($classquery1))
   {
      echo "<tr><td  id='Classtd' style='height: 100px;'><h5>".$classdata1['class']."</h5></td></tr>";
    }

    echo "</table></td>";


      $timequery = mysqli_query($connection,"SELECT timeslot From timeslot");
   while($timedata=mysqli_fetch_array($timequery))
   {
    echo "<td ><table id='table1' >";
   
    if($class=="all")
{
   $classquery=mysqli_query($connection,"SELECT class From class");
 }else
 {
    $classquery=mysqli_query($connection,"SELECT class From class WHERE class='$class'");
 }
   while($classdata=mysqli_fetch_array($classquery))
   {
        echo "<tr><td  id='ttdata' style='height: 150px;'>";
          $querytt = mysqli_query($connection, "SELECT * FROM timetable Where timeslot='$timedata[timeslot]' AND day='$dayrow[days]' AND clname='$classdata[class]'");
if(mysqli_num_rows($querytt)>0)
{
$row=mysqli_fetch_array($querytt);

 if($row['type']==1)
                             { echo "<b>Teacher: </b>".$row['tname']."<br><b>Sub: </b>".$row['sname']."<br>";
                              }else if($row['type']==2)
                                { echo "<b>Batch1:- Teacher: </b>".$row['b1_teacher']."&nbsp;&nbsp;&nbsp; <b>Lab: </b>".$row['b1_lab']."&nbsp;&nbsp;&nbsp; <b>Sub: </b>".$row['b1_sub']."<br><b>Batch2:- Teacher: </b>".$row['b2_teacher']."&nbsp;&nbsp;&nbsp; <b>Lab: </b>".$row['b2_lab']."&nbsp;&nbsp;&nbsp; <b>Sub: </b>".$row['b2_sub']."<br><b>Batch3:- Teacher: </b>".$row['b3_teacher']."&nbsp;&nbsp;&nbsp; <b>Lab: </b>".$row['b3_lab']."&nbsp;&nbsp;&nbsp; <b>Sub: <b>".$row['b3_sub']."<br>";}
                                ?>
                               <a href='deletett.php?srno=<?php echo $row['srno']; ?>' class="btn btn-danger">Delete</a>
                                
          </td>                     
                            
<?php
}else{
  echo "NA";
}

        echo "</td></tr>";
   }
    echo "</table></td>";
   }
?>
    </tr> 
<?php }

?>
</table></div>

</div></div>

                

                

             

   
 
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
