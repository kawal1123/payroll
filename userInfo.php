<?php
session_start();
if(!isset($_SESSION['uname']))
{
    echo "<script> window.location = 'login.php';</script>";
}
require("db.php");
$uname = $_SESSION['uname'];
$qry = "SELECT * FROM `staffinfo` WHERE username='$uname'";
$res = mysqli_query($connection,$qry);
while($R = mysqli_fetch_array($res))
{
    $emp_id = $R['emp_id'];
    $username = $R['username'];
    $user = $R['name'];
    $designation = $R['designation'];
    $phNo = $R['mob_no'];
    $doj = $R['doj'];
    $qualification = $R['qualification'];
    $salary = $R['salary'];
    $type = $R['type'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome - <?php echo $user; ?> </title>
    <link href="assets/css/bootstrap4.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <style>
            body {
                color:#222;
            }
            nav {
                background-color:#333;
                color:#fff;
                padding:15px 10px;
                width:100%;
            }
            nav > * {
                display : inline-block;
            }
            table {
                font-size:14px;
            }
            table th {
                font-weight:normal;
                color:#444;
            }
            table td {
                color:#000;
            }
            .btn {
                border-radius : 4px;
            }
      </style>
      <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap4.js"></script>
</head>

<body>
<div class="col-md-8  mx-auto" style="background-color:#fff;box-shadow:0 0 3px;display:block;min-height:100vh">
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Username & Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <label for="">Username : </label>
                <input id="newUname" type="text" class="form-control" value="<?php echo $username; ?>" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="">Current Password :</label>
                <input id="oldPassword" type="password" class="form-control" placeholder="Enter Current Password">
                <p id="msgPassword" class="form-text text-danger"></p>
            </div>
            <div class="form-group">
                <label for="">New Password :</label>
                <input id="newPassword" type="password" class="form-control" placeholder="Enter New Password">
            </div>
            <button onclick="saveSettings()" type="button" class="btn btn-success">Submit</button>
            <p id="msgContainer" class="form-text text-danger text-success"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <div class="row">
        <nav>
            <h4 class="pt-1" id="fullName"><?php echo $user; ?></h4>
            <div class="btn-group float-right">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" style="font-size:20px;font-weight:normal;"></i></button>
  <div class="dropdown-menu dropdown-menu-right">
        <a href="#exampleModal" class="dropdown-item" data-toggle="modal">Change Settings</a>
        <a href="logout.php?type=user" class="dropdown-item">Logout</a>
  </div>
</div>
        </nav>
        <table class="table">
            <tr>
                <th>DESIGNATION : </th><td><?php echo $designation; ?></td>
            </tr>
            <tr>
                <th>PHONE NO.  </th><td><?php echo $phNo; ?></td>
            </tr>
            <tr>
                <th>DATE OF JOININIG : </th><td><?php echo $doj; ?></td>
            </tr>
            <tr>
            <th>QUALIFICATION : </th><td><?php echo $qualification; ?></td>
            </tr>
            <tr>
                <th>SALARY : </th><td colspan=3>Rs. <?php echo $salary; ?> /-</td>
            </tr>
        </table>
        <h5 class="col-md-12 text-uppercase mt-5">Salary Details: - </h5>
        <h6 class="col-md-12 mt-3">Year : <span class='pl-3 pr-4'></span> Month : </h6>
         <form class="form-inline px-3" method="POST">
                  <div class="form-group">
                    <select class="custom-select" name="year" id="year" onchange="fetchMonth()">
                      <?php
                      if (strtolower($type) == "regular")
                      $qry = "SELECT DISTINCT(YEAR) from `contarct1` WHERE `emp_id` = '$emp_id' ORDER BY `YEAR`";
                      else
                      $qry = "SELECT DISTINCT(YEAR) from `contarct` WHERE `emp_id` = '$emp_id' ORDER BY `YEAR`";
                    echo $qry;
                      $res = mysqli_query($connection,$qry);
                      $i=0;
                      while($R = mysqli_fetch_array($res)){
                          $yearArray[$i] = $R[0];
                          $i++;
                        }
                      if(isset($_GET['yyyy'])) $yyyy = $_GET['yyyy'];
                      else $yyyy = end($yearArray);
                      foreach($yearArray as $key=>$theYear){
                        if($theYear == $yyyy)
                        echo "<option selected> $theYear </option>";
                        else
                        echo "<option> $theYear </option>";
                        $i++;
                      }
                      ?>
                    </select>
                  </div>  
                 
                  <div class="form-group">
                    <select class="custom-select" name="month" id="month"></select>
                  </div>  
                  <div class="form-group ml-2">
                        <input type="submit"  class="btn btn-success" value="Apply" name="filterBtn">                 
                  </div>
                </form>
                <?php
                if(isset($_POST['filterBtn']))
                {
                  $year = $_POST['year'];
                  $month = $_POST['month'];
                  echo "
                  <script>
                  window.location = 'userInfo.php?yyyy=$year&mm=$month';
                  </script>
                  ";
                }
                ?>
            <?php
            if(isset($_GET['mm'])) $mm = $_GET['mm'];
            if(isset($_GET['mm'])){
            if (strtolower($type) == "regular")
            $qry = "select * from contarct1 where emp_id = '$emp_id' and MONTH='$mm' and YEAR = '$yyyy'";
            else
            $qry = "select * from contarct where emp_id = '$emp_id' and MONTH='$mm' and YEAR = '$yyyy'";
            $res = mysqli_query($connection,$qry);
            if(mysqli_num_rows($res) == 0)
            echo "<h6 class='col-md-12 mb-5 mt-2 text-center'><i>No Records Found!</i></h6><br><br>";
            while ($R = mysqli_fetch_array($res))
            {
                ?>
                <table class="table table-striped mt-3" style="font-size:14px">
                <tr>
                    <th>Rate</th><td><?php echo $R[2]; ?></td>
                </tr>
                <tr>
                    <th>Payable Value</th><td><?php echo $R[3]; ?></td>
                </tr>
                <tr>
                    <th>Home Rent</th><td><?php echo $R[4]; ?></td>
                </tr>
                <tr>
                    <th>Inflation Allowance 24%</th><td><?php echo $R[5]; ?></td>
                </tr>
                <tr>
                    <th>Inflation Allowance 31%</th><td><?php echo $R[6]; ?></td>
                </tr>
                <tr>
                    <th>Medical Allowance</th><td><?php echo $R[7]; ?></td>
                </tr>
                <tr>
                    <th>CCA</th><td><?php echo $R[8]; ?></td>
                </tr>
                <tr>
                    <th>Total Sum</th><td><?php echo $R[9]; ?></td>
                </tr>
                <tr>
                    <th>CPF MC Share</th><td><?php echo $R[10]; ?></td>
                </tr>
                <tr>
                    <th>ESI MC Share</th><td><?php echo $R[11]; ?></td>
                </tr>
                <tr>
                    <th>Salary</th><td><?php echo $R[12]; ?></td>
                </tr>
                <tr>
                    <th colspan=2><b>DEDUCTIONS : -</b></th>
                </tr>
                <tr>
                    <th>PF Doubles</th><td><?php echo $R[13]; ?></td>
                </tr>
                <tr>
                    <th>ESI</th><td><?php echo $R[15]; ?></td>
                </tr>
                <tr>
                    <th>ESI MC Share</th><td><?php echo $R[15]; ?></td>
                </tr>
                <tr>
                    <th>Loan Recovery</th><td><?php echo $R[16]; ?></td>
                </tr>
                <tr>
                    <th>Recovery</th><td><?php echo $R[17]; ?></td>
                </tr>
                <tr>
                    <th>Total Deductions</th><td><?php echo $R[18]; ?></td>
                </tr>
                <tr>
                    <th>Payable Values</th><td><?php echo $R[19]; ?></td>
                </tr>
                <tr>
                    <th>Holidays</th><td><?php echo $R[20]; ?></td>
                </tr>
                <tr>
                    <th>Signature</th><td><?php echo $R[21]; ?></td>
                </tr>
                </table>
            <?php
            }
        }
        else echo "<h6 class='col-md-12 mb-5 mt-2 text-center'><i>Select Month & Year!</i></h6><br><br>";
            ?>
    </div>
</div>


<script>
function saveSettings() {
        var newUname = $("#newUname").val();
        var oldPassword = $("#oldPassword").val();
        var newPassword = $("#newPassword").val();
        var fullName = $("#fullName").text();
        if(newUname && oldPassword && newPassword && fullName)
        {
          $.ajax({
          type: 'post',
          url: 'userSettings.php',
          data: {
          username:newUname,
          oldPassword:oldPassword,
          password:newPassword,
          name: fullName
          },
          success: function (response) {
              if(response == "false")
              {
                  $("#msgPassword").text("Wrong Password!");
              }
              else {
                $("#msgContainer").removeClass("text-danger");
                $("#msgContainer").addClass("text-success");
                  $("#msgContainer").text("Username and Password changed successfully!")
                  $("#msgPassword").text("");
                  $("#oldPassword").val("");
                  $("#newPassword").val("");
              }
            }
          });
        }
        else
            $("#msgContainer").text("Enter the Values!");
            $("#msgContainer").removeClass("text-success");
            $("#msgContainer").addClass("text-danger");
      }
      function fetchMonth() {
          let yearSelected = $("#year").val();
          let type = "<?php echo $type; ?>";
          let emp_id = "<?php echo $emp_id; ?>";
          let theMonth = "<?php if(isset($_GET['mm'])) echo $_GET['mm']; ?>";
          if(yearSelected){
              $.ajax({
                  type:'post',
                  url:'fetchMonths.php',
                  data: {
                      year:yearSelected,
                      type:type,
                      emp_id:emp_id,
                      theMonth:theMonth
                  },
                  success:function (response) {
                      $("#month").html(response);
                      console.log(response);
                  }
              });
          }
      }
      fetchMonth();
</script>
  </body>
</html>