<?php 
session_start();
include("confs/config.php");

$email=$_SESSION['email'];
$ownerid=$_SESSION['ownerid'];

$_SESSION['township']=$_POST['hiddenschoolinfo'];
$township=$_SESSION['township'];
$school=mysqli_query($conn,"SELECT * from school where SName='$township'");
$row=mysqli_fetch_assoc($school);

$ownerprofile=mysqli_query($conn,"SELECT * from owner where Id='$ownerid'");
$rowprofile=mysqli_fetch_assoc($ownerprofile);

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ferry Management System</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendorhomepage/bootstrap/dist/css/bootstrap.min.css">
    <link href="lib/ssi-modal/dist/ssi-modal/styles/ssi-modal.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="vendorhomepage/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendorhomepage/themify-icons/css/themify-icons.css">
    <!-- <link rel="stylesheet" href="vendorhomepage/flag-icon-css/css/flag-icon.min.css"> -->
    <link rel="stylesheet" href="css/stylehome.css">
    <link rel="stylesheet" type="text/css" href="css/modify.css">
    <link rel="stylesheet" type="text/css" href="css/carinfo.css">
    <link rel="stylesheet" type="text/css" href="css/driverinfo.css">
    <link rel="stylesheet" type="text/css" href="css/showdriverinfo.css">
    <link rel="stylesheet" type="text/css" href="css/fmsprofile.css">
    <link href="css/prism.css" media="all" rel="stylesheet" type="text/css">
    <link href="css/lity.css" rel="stylesheet"/>

    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="exponential.js"></script>
    <style type="text/css">
        
        
    
    </style>

</head>

<body>


    <!-- Left Panel -->                                 

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="owner.php"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="owner.php"><img src="images/logo/FMS3.png" alt="Logo" width="40px;" height="40px;"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <!-- <a href="owner.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a> -->
                    <form class="hovform" method="post" action="owner.php">
                        <i class="menu-icon ti-dashboard">
                             <input type="submit" name="submitdashboard" value="Dashboard">
                        </i>
                           
                    </form>                    
                    </li>

                    
                    <h3 class="menu-title">Information</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                    <li>
                        <!-- <a href="carinfo.php"> <i class="menu-icon fa fa-bus"></i>Car Information</a> -->

                    <form class="hovform" method="post" action="carinfo.php">
                        <i class="menu-icon ti-truck">
                            <input type="submit" name="submitcarinfo" value="Car Information">  
                        </i>
                          
                    </form> 
                    </li>

                    <li>
                        <!-- <a href="driverinfo.php"> <i class="menu-icon ti-user"></i>Driver Information </a> -->
                    <form class="hovform" method="post" action="driverinfo.php">
                        <i class="menu-icon ti-user">
                             <input type="submit" name="submitdriverinfo" value="Driver Information">
                        </i>
                       
                    </form> 
                    </li>

                    <li  class="active">
                        <!-- <a href="schoolinfo.php"> <i class="menu-icon ti-home"></i>School Information</a> -->

                    <form class="hovform" method="post" action="schoolinfo.php">
                        <i class="menu-icon ti-world">
                            <input type="submit" name="submitschoolinfo" value="School Information">
                        </i>
                            
                    </form> 
                    </li>
                    
                    
                    <h3 class="menu-title">Assign</h3><!-- /.menu-title -->

                    <li>
                        <!-- <a href="studentregister.php"> <i class="menu-icon ti-notepad"></i>Student Register</a> -->

                    <form class="hovform" method="post" action="studentregister.php">
                        <i class="menu-icon ti-notepad">&nbsp;<input type="submit" name="submitstudentregister" value="Student Register">  </i>
                          
                    </form> 
                    </li>
                   <!--  <li>
                        <a href="owner.php"> <i class="menu-icon ti-id-badge"></i>Driver Register</a>
                    </li> -->
                    <li>
                        <!-- <a href="assign.php"> <i class="menu-icon ti-clipboard"></i>Assign / Reassign</a> -->

                    <form class="hovform" method="post" action="assign.php">
                        <i class="menu-icon ti-clipboard">
                            <input type="submit" name="submitassign" value="Assign / Reassign">   
                        </i>
                         
                    </form> 
                    </li>

                  
                    <h3 class="menu-title">Transaction</h3><!-- /.menu-title -->

                    <li>
                        <!-- <a href="studentsalary.php"> <i class="menu-icon ti-credit-card"></i>Student's Salary</a> -->
                    <form class="hovform" method="post" action="studentsalary.php">
                        <i class="menu-icon ti-credit-card">
                            <input type="submit" name="submitstudentsalary" value="Student Salary">  
                        </i>
                    </form> 
                    </li>

                  
                   
                    <h3 class="menu-title">Activity</h3><!-- /.menu-title -->

                    <li>
                        <form class="hovform" method="post" action="omapSchool.php">
                            <i class="menu-icon ti-map-alt">&nbsp;<input type="submit" name="submitmap" value="Map"></i>
                        </form>
                    </li>
                    <li>
                        <!-- <a href="pickup.php"> <i class="menu-icon ti-timer"></i>Student Pickup</a> -->

                    <form class="hovform" method="post" action="pickup.php">
                        <i class="menu-icon ti-timer">&nbsp;<input type="submit" name="submitpickup" value="Student Pickup"></i>
                            
                    </form> 
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    <!-- Left Panel -->



    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">




                <!-- Header-->
                <header id="header" class="header">



                    <div class="header-menu">

                    <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-sliders"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                               

                        <div class="col-sm-5">
                            <div class="user-area dropdown float-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle" src="<?php echo $rowprofile['Photo'] ?>" alt="User Avatar">
                                </a>

                                <div class="user-menu dropdown-menu">
                                    <a class="nav-link" href="#profile" data-lity><i class="fa fa-user"></i> My Profile</a>                  
                                    <a class="nav-link" id="logoutbut"><i class="fa fa-power-off"></i> Logout</a>
                                </div>
                            </div>
                        </div>
                    
                    </div> 

                </header><!-- /header -->
                <!-- --------------------------------------------------------------------
                    --------------------------Header------------------------------------>




                    <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Show School Information</h1>
                            </div>
                        </div>
                    </div>

                   

                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li class="active"><a href="owner.php">Dashboard</a>&nbsp;/&nbsp;<a href="schoolinfo.php">School Information</a>&nbsp;/&nbsp;<a href="#">Show School Information</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content mt-3">

                    

                    

                    <form action="schoolinfo.php" method="post" style="margin-top:20px;height: 700px;">
                    <div class="morecarinfo" style="height: 650px;">
                        <div style="width: 100%;height: 600px;margin:0px auto;margin-bottom:60px;"  class="showcar">
                                

                                <div class="showcarinfocontent">

                                <h1>School Information</h1>
                            

                                 <div class="headtab">
                                    <table>
                                        <tr>
                                            <td> 
                                                <i class="fa fa-bank">&nbsp;&nbsp;&nbsp;</i>School&nbsp;&nbsp;
                                            </td>
                                            <td>
                                                <?php  echo $row['SName']?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 
                                                <i class="fa fa-signal">&nbsp;&nbsp;&nbsp;</i>Type&nbsp;&nbsp;
                                            </td>
                                            <td>
                                              <?php  echo $row['Type']?>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td> 
                                                <i class="fa fa-signal">&nbsp;&nbsp;&nbsp;</i>Township&nbsp;&nbsp;
                                            </td>
                                            <td>
                                              <?php  echo $row['Township']?>
                                            </td>
                                        </tr>

                                        
                                        <tr>
                                            <td> 
                                                <i class="fa fa-phone">&nbsp;&nbsp;&nbsp;</i>Phone&nbsp;&nbsp;
                                            </td>
                                            <td>
                                                <?php  echo $row['ContactNo']?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 
                                                <i class="fa fa-hourglass-half">&nbsp;&nbsp;&nbsp;</i>Assign&nbsp;&nbsp;
                                            </td>
                                            <td>
                                               <?php  
                                                    if($row['Assign']==0)
                                                    {
                                                        echo "Half Time";
                                                    }
                                                    elseif($row['Assign']==1)
                                                    {
                                                        echo "Full Time";
                                                    }
                                               ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 
                                                <i class="fa fa-home">&nbsp;&nbsp;&nbsp;</i>Address&nbsp;&nbsp;
                                            </td>
                                            <td>
                                               <?php  echo $row['Address']?>
                                            </td>
                                        </tr>


                                    </table>
                               
                                </div>        


                                
                                <div class="buttoncar">      
                                        <button class="backtodriverinfo">Back</button>
                                        <?php $township=$row['Township'] ?>                                 
                                        <input type="hidden" name="hiddenschoolinfo" value="<?php echo $township ?>">
                                </div>

                                <!-- <div class="buttoncar">      
                                        <button class="editdriverinfo">Edit</button>
                                        
                                </div>  
 -->
                            </div>


                            
                        </div>


                    </div>

                    </form>


    <!-- end inline car info -->
                
    

    <!------------------------------ edit car Information----------------------------------------->





                    <form action="saveschoolinfo.php" method="post">
                    <div class="editmorecarinfo" >
                        <div style="width: 100%;height: 100%background: green;margin:0px auto;margin-bottom:60px;"  class="showcar">
                                

                                <div class="showcarinfocontent">

                                <h1> Edit Driver Information</h1>
                                

                                <div class="headtab">
                                    <table>
                                        <tr>
                                            <td> 
                                                <i class="fa fa-bank">&nbsp;&nbsp;&nbsp;</i>Name&nbsp;&nbsp;
                                            </td>
                                            <td>                                                
                                                <input type="text" name="editdrivername" value="<?php echo $row['schoolname']?>">
                                            </td>
                                        </tr>

                                        <!-- <tr>
                                            <td> 
                                                <i class="fa fa-credit-card-alt">&nbsp;&nbsp;&nbsp;</i>NRC&nbsp;&nbsp;
                                            </td>
                                            <td>                                             
                                              <input type="text" name="editdrivernrc" value="<?php echo $row['nrc']?>">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 
                                                <i class="fa fa-home">&nbsp;&nbsp;&nbsp;</i>Address&nbsp;&nbsp;
                                            </td>
                                            <td>
                                                <input type="text" name="editdriveraddress" value="<?php echo $row['address']?>">                   
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 
                                                <i class="fa fa-phone">&nbsp;&nbsp;&nbsp;</i>Phone&nbsp;&nbsp;
                                            </td>
                                            <td>
                                                <input type="text" name="editdriverphone" value="<?php echo $row['phone']?>">                                               
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 
                                                <i class="fa fa-paw">&nbsp;&nbsp;&nbsp;</i>DOB&nbsp;&nbsp;
                                            </td>
                                            <td>
                                              <input type="text" name="editdriverdob" value="<?php echo $row['dob']?>">                                            
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 
                                                <i class="fa fa-server">&nbsp;&nbsp;&nbsp;</i>License&nbsp;&nbsp;
                                            </td>
                                            <td>
                                              <input type="text" name="editdriverlicense" value="<?php echo $row['license']?>">
                                            
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 
                                                <i class="fa fa-spinner">&nbsp;&nbsp;&nbsp;</i>Year of Experience&nbsp;&nbsp;
                                            </td>
                                            <td>
                                              <input type="text" name="editdriveryearofexperience" value="<?php echo $row['yearofexperience']?>">

                                            </td>
                                        </tr>

                                        <tr>
                                            <td> 
                                                <i class="fa fa-mail-forward">&nbsp;&nbsp;&nbsp;</i>Email&nbsp;&nbsp;
                                            </td>
                                            <td>
                                              <input type="text" name="editdriveremail" value="<?php echo $row['email']?>">
                                              
                                            </td>
                                        </tr> -->
                                    </table>
                                   
                                </div>        
                                                    
                                <div class="buttoncar">      
                                        <button class="savedriverinfo">Save</button>                                        
                                </div>  

                    </form>

                               
                                <div class="buttoncar">      
                                <form method="post" action="schoolinfo.php" class="butform">
                                        <button class="backtodriverinfo">Back</button>
                                        <?php $township=$row['township'] ?>                                 
                                        <input type="hidden" name="hiddenschoolinfo" value="<?php echo $township ?>">
                                </div>
                                </form>

                                </div>


                            
                        </div>


                </div>

                    











    <!-- ---------------------------------end edit car Information -------------------------------------->

   
                    


                    <!-- end ser car -->
                   

                </div> 

    </div>

    <!-- Right Panel -->



    <!-- start profile -->

    <?php
        include("ownerprofileprofile.php");
    ?>
       <!--      <script>
                var form = $('#proform');
                var proname = $("#proname");
                var proemail = $("#proemail");
                var pronrc = $("#pronrc");
                var prophone = $("#prophone");

                var proaddress = $("#proaddress");
                var prodob = $("#prodob");
                $(form).submit(function(event) {

                    function isValidEmail(email) {
                        var emailRegExp = /^([a-z 0-9])+\.?([a-z 0-9])+\@([a-z])+\.(com|org|edu)\.?([a-z]+)?$/gi;
                        return (emailRegExp.test(email));
                    }

                    function isValidNRC(nrc) {
                        var nrcRegExp = /^[0-9]+\/\w+\([A-Z]\)[0-9]{6}$/gi;
                        return (nrcRegExp.test(nrc));
                    }

                    function isValidPhone(tel) {
                        var telRegExp = /^[0-9]{2}[0-9]{9,13}$/gi;
                        return (telRegExp.test(tel));
                    }
                    // Stop the browser from submitting the form.
                    event.preventDefault();

                    proname.css("border", "1px solid lightgray");
                    proemail.css("border", "1px solid lightgray");
                    pronrc.css("border", "1px solid lightgray");
                    prophone.css("border", "1px solid lightgray");
                    var flag = 1;
                    // TODO
                    if (proname.val() == 0 || proemail.val() == 0 || pronrc.val() == 0 || prophone.val() == 0) {
                        if (proname.val() == 0) {
                            proname.css("border", "1px solid red");
                        }
                        if (proemail.val() == 0) {
                            proemail.css("border", "1px solid red");
                        }
                        if (pronrc.val() == 0) {
                            pronrc.css("border", "1px solid red");
                        }
                        if (prophone.val() == 0) {
                            prophone.css("border", "1px solid red");
                        }
                        flag = 0;
                    }
                    if (!isValidEmail(proemail.val())) {
                        proemail.css("border", "1px solid red");
                        flag = 0;
                    }
                    if (!isValidNRC(pronrc.val())) {
                        pronrc.css("border", "1px solid red");
                        flag = 0;
                    }
                    if (!isValidPhone(prophone.val())) {
                        prophone.css("border", "1px solid red");
                        flag = 0;
                    }

                    if (flag == 1) {
                        var pronameval = proname.val();
                        var proemailval = proemail.val();
                        var pronrcval = pronrc.val();
                        var prophoneval = prophone.val();
                        var proaddressval = proaddress.val();
                        var prodobval = prodob.val();
                        proname.css("border", "1px solid lightgray");
                        proemail.css("border", "1px solid lightgray");
                        pronrc.css("border", "1px solid lightgray");
                        prophone.css("border", "1px solid lightgray");
                        location.href = "editprofile.php?name=" + pronameval + "&email=" + proemailval + "&nrc=" + pronrcval + "&address=" + proaddressval + "&dob=" + prodobval + "&phone=" + prophoneval;

                    }
                });
            </script>
        </form>


    </div>
 -->
    <!-- end profile -->




   

    <script type="text/javascript" src="vendor/jquery/dist/jquery.min.js"></script>
    <script src="lib/ssi-modal/dist/ssi-modal/js/ssi-modal.min.js"></script>
    <script type="text/javascript" src="js/logoutpopup.js"></script>
    <script src="js/main.js"></script>      
    <script src="vendorhomepage/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendorhomepage/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/widgets.js"></script>


    <!-- lity js -->

    <script src="js/lity.js"></script>  
    <script src="js/prism.js"></script>  
    <script type="text/javascript" src="js/fms.js"></script>
    <script type="text/javascript">
        

         $jq=jQuery.noConflict();
         $jq(document).ready(function(e) {

            $jq('.morecarinfo').slideDown("slower");


            $jq('.editdriverinfo').on("click",function(e){
            e.preventDefault();
            $jq('.morecarinfo').hide();
                $jq('.editmorecarinfo').fadeIn();
            });


          
        

         });

       
    

   </script>
</body>

</html>
