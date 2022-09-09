<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: ../index.php");
        die();
    }
    $email = $_SESSION['SESSION_EMAIL'];
    require 'includes/functions.php';
    include '../config.php';
    include 'includes/details.php';
    $sql="Select * from users where email = '{$email}'";
    $query= mysqli_query($conn,$sql);
    $arr=mysqli_fetch_assoc($query);
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
                        <!-- <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg"
                                width="31" alt="Seema Sisty"></span> -->
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <!-- <div class="avatar avatar-sm">
                                <img src="assets/img/profiles/avatar-01.jpg" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div> -->
                            <div class="user-text">
                                <h6><?php echo $arr['name'];?></h6>
                                <p class="text-muted mb-0">Team Leader</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="#">Team Profile</a>
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
                        <li style:"background-color: white;">
                            <a href="index.php" ><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fe fe-users"></i> <span> Users</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="background-color: #00c16e;">
                                <li><a href="#" >+ Add Member</a></li>

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
                                <h4 class="card-title float-start">Team Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive no-radius">
                                    <form action="add_member.php" method="post">
                                    <table class="table table-hover table-center">
                                        <thead>
                                            <tr>
                                                <th>Member id.</th>
                                                <th>Name</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Organization</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $team=$arr['team_name'];
                                                $sql="select * from members where team_name = '$team'";
                                                $query=mysqli_query($conn,$sql);
                                                for($i=1;$i<=mysqli_num_rows($query);$i++){
                                                    $arr=mysqli_fetch_assoc($query);
                                                    show_team($arr['id'],$arr['name'],$arr['email'],$arr['organization']);
                                                }
                
                                            ?>
                    
                        
                                        </tbody>
                                    </table>
                                        <?php
                                            if (mysqli_num_rows($query)<4)
                                                echo "<center><div class='submit' style='margin-top:5%;'>
                                                <input type='submit' name='submit' value='Add Member' href></center> ";
                                            
                                        ?>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>