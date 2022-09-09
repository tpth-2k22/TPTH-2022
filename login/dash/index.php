<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ../index.php");
        die();
    }

    include '../config.php';
    include 'includes/details.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>User Dashboard</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/feathericon.min.css">

    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <div class="header">


            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>
            

            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <li class="nav-item dropdown noti-dropdown">
                   
                </li>


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                       
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                           
                            <div class="user-text">
                                <h6><?php echo $arr['name'];?></h6>
                                <p class="text-muted mb-0">Team Leader</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="members.php">Team Profile</a>
                        <a class="dropdown-item" href="../logout.php">Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                        </li>
                        <li class="active">
                            <a href="index.php" style="background-color: #00c16e;"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fe fe-users"></i> <span> Users</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="members.php">+ Add Member</a></li>

                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">
               
                <div class="row">
                    <div class="col-md-12 d-flex">

                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title float-start">Problem Statements</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive no-radius">
                                    <table class="table table-hover table-center">
                                        <thead>
                                            <tr>
                                                <th>Problem No.</th>
                                                <th>Statement</th>
                                                <th class="text-center">Details</th>
                                                <th class="text-center">Submission Date</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div class="font-weight-600">01</div>
                                                </td>
                                                <td class="text-nowrap">Beat Policing Diary(BPD APP) with integration of wanted criminals data.</td>
                                                <td class="text-center">
                                                    <a href="http://tph2022.in/popup/index1.html" style="color:red;">View</a></td>
                                                <td class="text-center">
                                                    Will be Updated
                                                </td>
                                                <td class="text-end">
                                                    <a href="tpthFile/index.php?code=1" style="color:red;">Submit</a></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div class="font-weight-600">02</div>
                                                </td>
                                                <td class="text-nowrap">Web Scrapping and Information Retrieval for fugitive criminal.</td>
                                                <td class="text-center">
                                                    <a href="http://tph2022.in/popup/index2.html" style="color:red;">View</a></td>
                                                <td class="text-center">
                                                    Will be Updated
                                                </td>
                                                <td class="text-end">
                                                    <a href="tpthFile/index.php?code=2" style="color:red;">Submit</a></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div class="font-weight-600">03</div>
                                                </td>
                                                <td class="text-nowrap">Geotagging of CCTV Cameras and Intelligent Search of CCTV contents.</td>
                                                <td class="text-center">
                                                    <a href="http://tph2022.in/popup/index3.html" style="color:red;">View</a></td>
                                                <td class="text-center">
                                                    Will be Updated
                                                </td>
                                                <td class="text-end">
                                                    <a href="tpthFile/index.php?code=3" style="color:red;">Submit</a></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div class="font-weight-600">04</div>
                                                </td>
                                                <td class="text-nowrap">Geospatial Tagging and Analysis of accident areas.</td>
                                                <td class="text-center">
                                                    <a href="http://tph2022.in/popup/index4.html" style="color:red;">View</a></td>
                                                <td class="text-center">
                                                    Will be Updated
                                                </td>
                                                <td class="text-end">
                                                    <a href="tpthFile/index.php?code=4" style="color:red;">Submit</a></td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div class="font-weight-600">05</div>
                                                </td>
                                                <td class="text-nowrap">Rapid identification of Vehicle Number plate under varying lighting condition.</td>
                                                <td class="text-center">
                                                    <a href="http://tph2022.in/popup/index5.html" style="color:red;">View</a></td>
                                                <td class="text-center">
                                                    Will be Updated
                                                </td>
                                                <td class="text-end">
                                                    <a href="tpthFile/index.php?code=5" style="color:red;">Submit</a></td>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
        

    </div>
    <?php if($_GET['error']=="extension"){
        echo "<script>alert('File should be in PDF, DOCX or ZIP Format')</script>";
    }
    if($_GET['error']=="largefile"){
        echo "<script>alert('File size is too large')</script>";
    }
    if($_GET['success']=="false"){
        echo "<script>alert('File Upload unsuccessful')</script>";
    }
    if($_GET['success']=="true"){
        echo "<script>alert('File Upload successful')</script>";
    }
    
    
    ?>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>