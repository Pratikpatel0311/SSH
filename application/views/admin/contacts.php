<?php
    $id=$this->session->userdata('id');
 
    if(!$id){
      redirect('echo base_url();portfolio/login');
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assests/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assests/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Contacts List</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assests/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assests/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url(); ?>assests/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assests/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assests/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    <?php echo $this->session->userdata('name'); ?>
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url(); ?>profile/dashboard">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>profile/user_profile">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>profile/skills_list">
                        <i class="ti-view-list-alt"></i>
                        <p>Skills Aquired</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>profile/education_list">
                        <i class="ti-view-list-alt"></i>
                        <p>Education Gained</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url(); ?>profile/contacts">
                        <i class="ti-user"></i>
                        <p>Contacts List</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>profile/projects">
                        <i class="ti-briefcase"></i>
                        <p>Projects List</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>profile/notifications">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Contacts List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                                                
                        <li>
                            <a href="<?php echo base_url(); ?>profile/logout">
                                <i class="ti-settings"></i>
                                <p>Log Out</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Contact Name</th>
                                        <th>Contact Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Delete</th>                                      
                                    </thead>
                                    <tbody>
                                        <?php foreach($c_id->result() as $row){ ?>
                                        <tr>
                                            <td><?php echo $row->name; ?></td>
                                            <td><?php echo $row->email; ?></td>
                                            <td><?php echo $row->subject; ?></td>
                                            <td><?php echo $row->message; ?></td>
                                            <td><a href="<?php echo base_url(); ?>profile/delete_contact/<?php echo $row->id; ?>"><i class="ti-trash"></i></a></td>
                                            
                                        </tr>                                     
                                        <?php } ?>   
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>               
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assests/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assests/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url(); ?>assests/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url(); ?>assests/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assests/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url(); ?>assests/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url(); ?>assests/js/demo.js"></script>


</html>
