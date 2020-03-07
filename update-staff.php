<?php
  include("db.php"); //include auth.php file on all secure pages
  include("auth.php");

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
        var ScrollMsg= "Payroll and Management System - "
        var CharacterPosition=0;
        function StartScrolling() {
        document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
        ScrollMsg.substring(0, CharacterPosition);
        CharacterPosition++;
        if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
        window.setTimeout("StartScrolling()",150); }
        StartScrolling();
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

  </head>
  <body>

    <div class="container">
      <div class="masthead">
        <h3>
          <b><a href="index.php">Payroll Management System</a></b>
            <a data-toggle="modal" href="#colins" class="pull-right"><b>Admin</b></a>
        </h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active">
              <a href="">CONTRACT</a>
            </li>
            <li>
              <a href="home_employee1.php">REGULAR</a>
            </li>
            <li>
              <a href="home_salary.php">Income</a>
            </li>
          </ul>
        </nav>
      </div><br><br>

      <?php
        $id=$_GET['id'];
        $query = "SELECT * from staffinfo where id='".$id."'";
        $result = mysqli_query($connection,$query) or die ( mysqli_error());

        while ($row = mysqli_fetch_array($result))
        {
          ?>

              <form class="form-horizontal col-md-10" method="post" name="form">
                <input type="hidden" name="new" value="1" />
                <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                <div class="form-group">
                  <label class="col-sm-4 control-label">Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required" value="<?php echo $row[4] ?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-4 control-label">Designation</label>
                  <div class="col-sm-8">
                    <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" required="required" value="<?php echo $row[5] ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Mobile Number</label>
                  <div class="col-sm-8">
                    <input type="number" name="mobno" id="mobno" class="form-control" placeholder="Mobile Number" required="required" value="<?php echo $row[6] ?>">
                  </div>
                </div>

                  <div class="form-group">
                  <label class="col-sm-4 control-label">Date of Joining</label>
                  <div class="col-sm-8">
                    <input type="date" name="doj" id="doj" class="form-control" required="required" value="<?php echo $row[7] ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Qualification</label>
                  <div class="col-sm-8">
                    <input type="text" name="quali" id="quali" class="form-control" placeholder="Qualification" required="required" value="<?php echo $row[8] ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Salary</label>
                  <div class="col-sm-8">
                    <input type="number" name="salary" id="salary" class="form-control" placeholder="Salary" required="required" value="<?php echo $row[9] ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Type</label>
                  <div class="col-sm-8">
                    <select name="type" id="type">
                      <?php
                      if($row[10] == "Contract") {
                      echo "<option selected>Contract</option>";
                      echo "<option>Regular</option>";
                      }
                      else{
                      echo "<option>Contract</option>";
                      echo "<option selected>Regular</option>";
                      }
                      ?>
                    </select>
                  </div>
                </div>

                
                

                <div class="form-group">
                  <label class="col-sm-4 control-label"></label>
                  <div class="col-sm-8">
                    <input type="submit" name="updateStaff" class="btn btn-success" value="Submit">
                  </div>
                </div>
              </form>
            <?php
          }
        ?>

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
if(isset($_POST['updateStaff'])) {
  $name = $_POST['name'];
  $designation = $_POST['designation'];
  $mobno = $_POST['mobno'];
  $doj = $_POST['doj'];
  $quali = $_POST['quali'];
  $salary = $_POST['salary'];
  $type = $_POST['type'];
   $qry = "UPDATE staffinfo SET name = '$name', designation = '$designation', mob_no = '$mobno', doj = '$doj', qualification = '$quali', salary = '$salary', type = '$type' WHERE id='$id'";
   $res = mysqli_query($connection,$qry);
  if($res)
    echo "<script>alert('Data Updated!');
  window.location.href = 'addstaff.php';
  </script>";
  else
    echo "<script>alert('Data not updated!');</script>";
}

?>