<?php
  session_start();
  if(!isset($_SESSION['role']) || $_SESSION['role'] != 'faculty'){
    header("Location: ../login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Course Outcome Entry | SPMS  
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />

  <style>
    .final-result{
      color: #F56332;
      font-size: 18px;
      font-weight: 500;
    }
    .submit-button{
      color: #fff;
      background-color: #F56332;
      border-radius: 25px;
      width:100px
    }
    .total-marks{
      text-align: right;
      color: #F56332;
      font-size: 24px;
      padding-right: 50px;
    }
    .selectpicker{
      width: 100%;
      padding: 8px;
      border-radius: 20px;
      border-color: #E3E3E3;
    }
    .selectpicker:focus{
      outline: none;
      border-color: #F56332;
    }
    .data-file{
      margin-top: 10px;
      padding: 25px;
      background-color: #E3E3E3;
      border-radius: 5px;
    }
    /* .card-body{
      background-color: darkslategray;
    } */
  </style>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          IUB
        </a>
        <a href="#" class="simple-text logo-normal">
          SPMS
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="faculty-marks-entry.php">
              <i class="now-ui-icons design_app"></i>
              <p>Marks Entry</p>
            </a>
          </li>

          <li>
            <a href="course-outcome.php">
              <i class="now-ui-icons design_app"></i>
              <p>Course Outcome</p>
            </a>
          </li>

          <li>
            <a href="display-course-outcome.php">
              <i class="now-ui-icons design_app"></i>
              <p>Display Course Outcome</p>
            </a>
          </li>

          <li>
            <a href="avg-plo-achivement.php">
              <i class="now-ui-icons design_app"></i>
              <p>PLO Achivement</p>
            </a>
          </li>

          <li>
            <a href="faculty-feedback.php">
              <i class="now-ui-icons education_atom"></i>
              <p>Faculty Feedback</p>
            </a>
          </li>
          <li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Course Outcome Entry</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">profile</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Faculty</a>
                  <a class="dropdown-item" href="../php/logout.php">LogOut</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-chart">
              <div class="card-header">
                <!-- <h5 class="card-category">Summer 2021</h5> -->
                <h4 class="card-title">Course Outcome Entry</h4>
                
              </div>
              <div class="card-body">
                <form action="../php/add-course-outcome.php" method="POST" id="marks-form" enctype='multipart/form-data'>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Co ID</label>
                        <input type="text" class="form-control"  placeholder="Ex. 101" name="coId">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Student Id</label>
                        <input type="text" class="form-control"  placeholder="Ex. 1928374" name="studentid">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Year</label>
                        <input type="text" class="form-control" placeholder="Ex. 2023" name="year">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Semester</label>
                        <input type="text" class="form-control" placeholder="Ex. Spring" name="semester">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Course</label>
                        <input type="text" class="form-control" placeholder="Ex. CSE-101" name="course">
                      </div>
                    </div>
                    <div class="col-md-1 px-1">
                      <div class="form-group">
                        <label>Section</label>
                        <input type="number" class="form-control" placeholder="Ex. 1" name="section">
                      </div>
                    </div>
                    <div class="col-md-2 pl-1">
                      <div class="form-group">
                        <label>Grade</label>
                        <input type="text" class="form-control" placeholder="Ex. A-" name="grade">
                      </div>
                    </div>
                  </div>
                   
                  
                  <div class="row">
                    <div class="col-md-12 pr-1">
                      <div class="form-group data-file" align="center">
                        <label for="file" id="file-label">Choose CSV File</label>
                        <input type="file" class="form-control-file" id="file" name="file">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-8">
                    <button type="button" class="btn submit-button">Submit</button>
                  </div>
                  <div class="col-4 total-marks">Total : <span id="marks-here">0</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by Group-4. Coded by Group-4</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
 
  <script>
    $(".submit-button").click(function(){
      $("#marks-form").submit();
    });

    $("#file").change(function(){
      $("#file-label").html($("#file").val());
    });
  </script>
</body>

</html>