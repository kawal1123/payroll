<?php
include("auth.php"); //include auth.php file on all secure pages
include("db.php");
//$sq = "SELECT * from contract WHERE id='1'";
// $sql = mysqli_query($conn, $sq);
//while ($row = mysqli_fetch_array($sql)) {
 // $phil = $row['philhealth'];
 // $bir = $row['bir'];
 // $gsis = $row['gsis'];
 // $love = $row['pag_ibig'];
 // $loans = $row['loans'];
//}
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap, a sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <title></title>

    <script>
      <!--
        var ScrollMsg= "salary Management System - "
        var CharacterPosition=0;
        function StartScrolling() {
        document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
        ScrollMsg.substring(0, CharacterPosition);
        CharacterPosition++;
        if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
        window.setTimeout("StartScrolling()",150); }
        StartScrolling();

         function myFunction() {
    window.print();
}
      // -->
    </script>

    <link href="assets/must.png" rel="shortcut icon">
    <link href="assets/css/justified-nav.css" rel="stylesheet">


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="data:text/css;charset=utf-8," data-href="assets/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet"> -->
    <!-- <link href="assets/css/docs.min.css" rel="stylesheet"> -->
    <link href="assets/css/search.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/styles.css" /> -->
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.min.css">
    <style>
    select {
      display:inline-block;
      width:100%;
      height:35px;
      padding:.375rem 1.75rem .375rem .75rem;
      line-height:1.5;
      color:#495057;
      vertical-align:middle;
      background:#fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center;
      background-size:8px 10px;
      border:1px solid #ced4da;
      border-radius:.25rem;
      -webkit-appearance:none;
      -moz-appearance:none;
      appearance:none
      }
      select:focus {
      border-color:#80bdff;
      outline:0;
      box-shadow:inset 0 1px 2px rgba(0,0,0,.075),0 0 5px rgba(128,189,255,.5)
      }
      </style>
  </head>
  <body>


    <br>

    <div class="container" style="width:100%; height:50%;">
      <div class="masthead nprint">
        <h1 style="text-align:center;font-family:product sans,sans-serif;font-size:45px;">Skill Training Centre</h1>

        <h3>
          <b><a href="index.php" style="font-size:30px;">Salary Management System</a></b>
            <a data-toggle="modal" href="#colins" class="pull-right"><b>Admin</b></a>
        </h3>
        <nav>
          <ul class="nav nav-justified">
            <li>
              <a href="home_employee.php">CONTRACT</a>
            </li>
             <li>
              <a href="home_employee1.php">REGULAR</a>
            </li>
            <li  class="active">
              <a href="addstaff.php">STAFF INFO</a>
            </li>
          </ul>
        </nav>
      </div>

        <br>
          <div class="well bs-component">
              <fieldset>
                <button type="button" data-toggle="modal" data-target="#addEmployee" class="btn btn-success">Add New</button>
                <br><br>







                               
                <p align="center"><big><b>List of Staff</b></big></p>
                <style type="text/css">
                    @media print{
                      .nprint{
                        display: none !important;
                      
                      }

                    }
                  </style>
                <button class="nprint"  onclick="myFunction()" style=" background-color: dodgerblue; 
    border: none;color: white;padding: 15px 32px;text-align: center; text-decoration: none;display: inline-block;font-size: 16px;margin: 4px 2px;cursor: pointer; border-radius:5px;font-size:15px;">Print this page</button>
                <div class="table-responsive">
                  <form method="post" action="" >
                    <table class="table table-bordered table-hover table-condensed" id="myTable">
                      <!-- <h3><b>Ordinance</b></h3> -->
                      <thead>
                        <tr class="info">
                          <th><p align="center">Sr. No.</p></th>
                          <th><p align="center">Employee ID</p></th>
                          <th><p align="center">Name</p></th>
                          <th><p align="center">Designation</p></th>
                          <th><p align="center">Mobile Number</p></th>
                          <th><p align="center">Date of joining</p></th>
                          <th><p align="center">Qualification</p></th>
                          <th><p align="center">Salary</p></th>
                          <th><p align="center">Type</p></th>
                          <th><p class =" nprint" align="center">Options</p></th>
                         </tr>
                      </thead>
                      <tbody>
                        <?php

                        $empp = "SELECT * FROM staffinfo";
                        $query = mysqli_query($connection, $empp);
                        $i=1;
                        while ($row = mysqli_fetch_array($query)) {

                          ?>

                        <tr>
                          <td align="center"><?php echo $i; ?></td>
                          <td align="center"><?php echo $row[1] ?></td>
                          <td align="center"><?php echo $row[4] ?></td>
                          <td align="center"><?php echo $row[5] ?></td>
                          <td align="center"><?php echo $row[6] ?></td>
                          <td align="center"><?php echo $row[7] ?></td>
                          <td align="center"><?php echo $row[8] ?></td>
                          <td align="center"><?php echo $row[9] ?></td>
                          <td align="center"><?php echo $row[10] ?></td>
                          <td align="center">
                            <a class="btn btn-primary" href="update-staff.php?id=<?php echo $row[0]; ?>" title="Update">Update</a>
                            <a class="btn btn-danger" href="delete-staff.php?id=<?php echo $row[0]; ?>" style="display:block"> Delete </a>
                          </td>
                        </tr>

                        <?php 
                      $i++;
                      } 
                      ?>
                      </tbody>
                      
                        <tr class="info">
                         
                          <th><p align="center">Sr. No.</p></th>
                          <th><p align="center">Employee ID</p></th>
                          <th><p align="center">Name</p></th>
                          <th><p align="center">Designation</p></th>
                          <th><p align="center">Mobile Number</p></th>
                          <th><p align="center">Date of joining</p></th>
                          <th><p align="center">Qualification</p></th>
                          <th><p align="center">Salary</p></th>
                          <th><p align="center">Type</p></th>
                          <th><p class =" nprint" align="center">Options</p></th>
                         </tr>

                    </table>
                  </form>
                </div>
              </fieldset>
            </form>
          </div>

      <!-- this modal is for ADDING an EMPLOYEE -->
      <div class="modal fade" id="addEmployee" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center"><b>Add Staff</b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">

              <form class="form-horizontal" action="#" name="form" method="post" autocomplete="off">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Username</label>
                  <div class="col-sm-8">
                    <input  type="text" name="username" id="username" class="form-control" placeholder="Username" required="required">
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                  </div>
                </div>
                 
                
                <div class="form-group">
                  <label class="col-sm-4 control-label">Designation</label>
                  <div class="col-sm-8">
                    <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Mobile Number</label>
                  <div class="col-sm-8">
                    <input type="number" name="mobno" id="mobno" class="form-control" placeholder="Mobile Number" required="required">
                  </div>
                </div>

                  <div class="form-group">
                  <label class="col-sm-4 control-label">Date of Joining</label>
                  <div class="col-sm-8">
                    <input type="date" name="doj" id="doj" class="form-control" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Qualification</label>
                  <div class="col-sm-8">
                    <input type="text" name="quali" id="quali" class="form-control" placeholder="Qualification" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Salary</label>
                  <div class="col-sm-8">
                    <input type="number" name="salary" id="salary" class="form-control" placeholder="Salary" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Type</label>
                  <div class="col-sm-8">
                    <select name="type" id="type">
                      <option>Contract</option>
                      <option>Regular</option>
                    </select>
                  </div>
                </div>

                
                

                <div class="form-group">
                  <label class="col-sm-4 control-label"></label>
                  <div class="col-sm-8">
                    <input type="submit" name="addStaff" class="btn btn-success" value="Submit">
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

      <!-- this modal is for my Colins -->
      <div class="modal fade" id="colins" role="dialog">
        <div class="modal-dialog modal-sm">
              
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:20px 50px;">
              <button type="button" class="close" data-dismiss="modal" title="Close">&times;</button>
              <h3 align="center">You are logged in as <b><?php echo $_SESSION['username']; ?></b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <div align="center">
                <a href="logout.php" class="btn btn-block btn-danger">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script src="assets/js/docs.min.js"></script> -->
    <script src="assets/js/search.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="assets/js/dataTables.min.js"></script>

    <!-- FOR DataTable -->
    <script>
      {
        $(document).ready(function()
        {
          $('#myTable').DataTable();
        });
      }
      
      
    </script>

    <!-- this function is for modal -->
    <script>
      $(document).ready(function()
      {
        $("#myBtn").click(function()
        {
          $("#myModal").modal();
        });
      });
    </script>
    
  </body>
</html>

<?php
if(isset($_POST['addStaff'])) {
  $name = $_POST['name'];
  $uname = $_POST['username'];
  $pass = $_POST['password'];
  $designation = $_POST['designation'];
  $mobno = $_POST['mobno'];
  $doj = $_POST['doj'];
  $quali = $_POST['quali'];
  $salary = $_POST['salary'];
  $type = $_POST['type'];
  $empID = substr(strtolower($uname), 0,3) . substr($mobno, 0,5);

  $qry = "INSERT INTO staffinfo VALUES('','$empID','$uname','$pass','$name','$designation','$mobno','$doj','$quali','$salary','$type')";
  $res = mysqli_query($connection,$qry);
  if($res)
    echo "<script>alert('Staff added Successfully!');
  window.location.href = 'addstaff.php';
  </script>";
  else
    echo "<script>alert('Staff not added!');</script>";
}
?>