<?php
include("auth.php"); //include auth.php file on all secure pages
include("add_employee.php");
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
            <li class="active">
              <a href="">CONTRACT</a>
            </li>
             <li>
              <a href="home_employee1.php">REGULAR</a>
            </li>
            <li class="">
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







                               <form class="form-inline" style="display:inline;" method="POST">
                <span style="margin-left:5%"></span>
                  <div class="form-group">
                    <select name="year">
                      <?php
                      $year = date("Y");
                      $yyyy = $_GET['yyyy'];
                      if ($yyyy == "") $yyyy = $year;
                      for ($i = 2010; $i <= $year; $i++)
                      {
                        if($yyyy == $i)
                        echo "<option selected> $i </option>";
                        else
                        echo "<option> $i </option>";
                      }
                      ?>
                    </select>
                  </div>  
                  <div class="form-group">
                    <select name="month">
                    <?php
                    $allMonths =  array(January,February,March,April,May,June,July,August,September,October,November,December);
                    $mm = $_GET['mm'];
                    if ($mm == "") $mm = date('F');
                    foreach ($allMonths as $value) {
                      if($mm == $value)
                      echo "<option selected> $value </option>";
                      else
                      echo "<option> $value </option>";
                    }
                    ?>
                    </select>
                  </div>  
                  <div class="form-group">
                <button type="submit"  class="btn btn-success" name="filterBtn">Apply</button>                  
                  </div>
                </form>
                <?php
                if(isset($_POST['filterBtn']))
                {
                  $year = $_POST['year'];
                  $month = $_POST['month'];
                  echo "
                  <script>
                  window.location = 'home_employee.php?yyyy=$year&mm=$month';
                  </script>
                  ";
                }
                ?>
                <p align="center"><big><b>List of Employees</b></big></p>
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
                          <th><p align="center">Id</p></th>
                          <th><p align="center">Name</p></th>
                          <th><p align="center">Rate</p></th>
                          <th><p align="center">Payble Value</p></th>
                          <th><p align="center">Inflation Allowance</p></th>
                          <th><p align="center">Traveling Allowance</p></th>
                          <th><p align="center">CPF MC Share</p></th>
                          <th><p align="center">ESI MC Share</p></th>
                          <th><p align="center">Total Dues</p></th>
                          <th><p align="center">PFDoubles</p></th>
                          <th><p align="center">Recovery</p></th>
                          <th><p align="center">Security</p></th>
                          <th><p align="center">Loan Recovery</p></th>
                          <th><p align="center">ESI Worker Share</p></th>
                          <th><p align="center">ESI MC Share</p></th>
                          <th><p align="center">Total Deduction</p></th>
                          <th><p align="center">Payble Values</p></th>
                          <th><p align="center">Holidays</p></th>
                          <th><p align="center">Signature</p></th>
                          <th><p class =" nprint" align="center">Options</p></th>
                         </tr>
                      </thead>
                      <tbody>
                        <?php

                        $conn = mysqli_connect('localhost', 'root', '', 'salary');
                        $empp = "SELECT * FROM contarct where MONTH = '$mm' and YEAR = '$yyyy' ORDER BY NAME";
                        $query = mysqli_query($conn, $empp);
                        while ($row = mysqli_fetch_array($query)) {
                          ?>

                        <tr>
                          <td align="center"><?php echo $row[0] ?></td>
                          <td align="center"><?php echo $row[2] ?></td>
                          <td align="center"><?php echo $row[3] ?></td>
                          <td align="center"><?php echo $row[4] ?></td>
                          <td align="center"><?php echo $row[5] ?></td>
                          <td align="center"><?php echo $row[6] ?></td>
                          <td align="center"><?php echo $row[7] ?></td>
                          <td align="center"><?php echo $row[8] ?></td>
                          <td align="center"><?php echo $row[9] ?></td>
                          <td align="center"><?php echo $row[10] ?></td>
                          <td align="center"><?php echo $row[11] ?></td>
                          <td align="center"><?php echo $row[12] ?></td>
                          <td align="center"><?php echo $row[13] ?></td>
                          <td align="center"><?php echo $row[14] ?></td>
                          <td align="center"><?php echo $row[15] ?></td>
                          <td align="center"><?php echo $row[16] ?></td>
                          <td align="center"><?php echo $row[17] ?></td>
                          <td align="center"><?php echo $row[18] ?></td>
                          <td align="center"><?php echo $row[19] ?></td>
                          <td align="center">
                            <a class="btn btn-primary" href="view_employee.php?id=<?php echo $row[0]; ?>" title="Update">Update</a>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>" style="display:block"> Delete </a>
                          </td>
                        </tr>

                        <?php 
                      } ?>
                      </tbody>
                      
                        <tr class="info">
                         
                          <th><p align="center">Id</p></th>
                          <th><p align="center">Name</p></th>
                          <th><p align="center">Rate</p></th>
                          <th><p align="center">Payble Value</p></th>
                          <th><p align="center">Inflation Allowance</p></th>
                          <th><p align="center">Traveling Allowance</p></th>
                          <th><p align="center">CPF MC Share</p></th>
                          <th><p align="center">ESI MC Share</p></th>
                          <th><p align="center">Total Dues</p></th>
                          <th><p align="center">PFDoubles</p></th>
                          <th><p align="center">Recovery</p></th>
                          <th><p align="center">Security</p></th>
                          <th><p align="center">Loan Recovery</p></th>
                          <th><p align="center">ESI Worker Share</p></th>
                          <th><p align="center">ESI MC Share</p></th>
                          <th><p align="center">Total Deduction</p></th>
                          <th><p align="center">Payble Values</p></th>
                          <th><p align="center">Holidays</p></th>
                          <th><p align="center">Signature</p></th>
                          <th><p  class ="nprint" align="center">Options</p></th>
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
              <h3 align="center"><b>Add Employee</b></h3>
            </div>
            <div class="modal-body" style="padding:40px 50px;">

              <form class="form-horizontal" action="#" name="form" method="post" autocomplete="off" onsubmit="return checkVal()">

                <input type="hidden" name="empID" id="empID">
                
                <div class="form-group">
                  <label class="col-sm-4 control-label">Name</label>
                  <div class="col-sm-8">
                    <input oninput="findName()" type="text" name="name" id="name" class="form-control" placeholder="Name" required="required">
                    <div class="list-group" id="namesList" style="margin:0;">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Rate</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTotal()" type="text" name="rate" id="rate" class="form-control" placeholder="Rate" required="required">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-4 control-label">Payble Value</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTotal(1)" type="text" name="pvalue" id="pvalue" class="form-control" placeholder="Payble Value" required="required">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-4 control-label">Inflation Allowance</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTDues()" type="text" name="iallowance" id="iallowance" class="form-control" placeholder="Inflation Allowance" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Traveling Allowance</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTDues()" type="text" name="tallowance" id="tallowance" class="form-control" placeholder="Traveling Allowance" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">CPF MC Share</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTDues()" type="text" name="cpfmcs" id="cpfmcs" class="form-control" placeholder="CPF MC Share" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">ESI MC Share</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTDues()" type="text" name="esimcs" id="esimcs" class="form-control" placeholder="ESI MC Share" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Total Dues</label>
                  <div class="col-sm-8">
                    <input type="text" name="tdues" id="tdues" class="form-control" placeholder="Total Dues" required="required">
                  </div>
                </div>
                <br>
                <div><h4 align="center">Deductions</h4></div>
                <br>
                 <div class="form-group">
                  <label class="col-sm-4 control-label">PFDoubles</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcDeductions()" type="text" name="pfdoubles" id="pfdoubles" class="form-control" placeholder="PFDoubles" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Recovery</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcDeductions()" type="text" name="recovery" id="recovery" class="form-control" placeholder="Recovery" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Security</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcDeductions()" type="text" name="security" id="security" class="form-control" placeholder="Security" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Loan Recovery</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcDeductions()" type="text" name="loan" id="loan" class="form-control" placeholder="Loan Recovery" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">ESI Worker Share</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcDeductions()" type="text" name="esi" id="esi" class="form-control" placeholder="ESI Worker Share" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">ESI MC Share</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcDeductions()" type="text" name="esimc" id="esimc" class="form-control" placeholder="ESI MC Share" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Total Deduction</label>
                  <div class="col-sm-8">
                    <input type="text" name="tdeduct" id="tdeduct" class="form-control" placeholder="Total Deduction" required="required">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Payble Values</label>
                  <div class="col-sm-8">
                    <input type="text" name="pvalues" id="pvalues" class="form-control" placeholder="Payble Values" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Holidays</label>
                  <div class="col-sm-8">
                    <select name="holidays" id="holidays" class="form-control" required="required" onchange="deductHolidays()">
                    <option value="1">0</option>
                    <script>
                    for(let x=1;x<=31;x++)
                    document.write("<option>"+x+"</options>");
                    </script>
                    </select>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Signature</label>
                  <div class="col-sm-8">
                    <input type="text" name="sign" id="sign" class="form-control" placeholder="Signature" required="required">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label"></label>
                  <div class="col-sm-8">
                    <input type="submit" name="submit" class="btn btn-success" value="Submit">
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
      let invalidName = false;
      function findName() {
        var name = document.querySelector("#name").value;
        if(name)
        {
          $.ajax({
          type: 'post',
          url: 'findName.php',
          data: {
          user_name:name,
          table:"contart"
          },
          success: function (response) {
            if(response == "false")
            {
              invalidName = true;
              $('#namesList').html("<i style='position:relative;top:5px;'>Employee Not Found!</i>"); 
            }
            else {
              $('#namesList').html(response);
              invalidName = false; 
            }
              console.log(response);
            }
          });
        }
        else
          $('#namesList').html(""); 
      }
      function fillName(btnVal) {
        $("#name").val(btnVal.title);
        $('#namesList').html(""); 
        $("#empID").val(btnVal.id); 
      }
      function checkVal() {
        if(invalidName == true) {
          document.querySelector("#name").focus();
          return false;
        }
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
    <script>
    let pValues,tDeduct;
    function calcTotal(theValue) {
      if(theValue != 1 )
      $("#pvalue").val(parseInt($("#rate").val()));
      $("#cpfmcs").val(parseInt($("#pvalue").val() * 10 / 100));
      $("#esimcs").val(parseInt($("#pvalue").val() * 4.755 / 100));
      $("#pfdoubles").val(parseInt($("#pvalue").val() * 20 / 100));
      $("#esi").val(parseInt($("#pvalue").val() * 1.755 / 100));
      $("#esimc").val(parseInt($("#pvalue").val() * 4.755 / 100));
      calcTDues();
      calcDeductions();
    }
    function calcTDues() {
      $("#tdues").val(parseInt($("#pvalue").val())+parseInt($("#cpfmcs").val()) + parseInt($("#esimcs").val()) + parseInt($("#iallowance").val()) + parseInt($("#tallowance").val()));
    }
    function calcDeductions() {
      tDeduct = parseInt($("#pfdoubles").val()) + parseInt($("#esi").val()) + parseInt($("#esimc").val()) + parseInt($("#loan").val()) +  parseInt($("#security").val()) + parseInt($("#recovery").val());
      $("#tdeduct").val(tDeduct);
      pValues = parseInt($("#tdues").val() - $("#pfdoubles").val() - $("#esi").val() - $("#esimc").val() - $("#loan").val() - $("#recovery").val() - parseInt($("#security").val()));
      $("#pvalues").val(pValues);
    }
    function deductHolidays() {
      $("#tdeduct").val(tDeduct + (parseInt( $("#pvalues").val() / daysInMonth() ) * ($("#holidays").val() -1)) );
      $("#pvalues").val(parseInt(pValues - parseInt( $("#pvalues").val() / daysInMonth() ) * ($("#holidays").val() -1)) );
    }
    function daysInMonth() {
  var now = new Date();
  return new Date(now.getFullYear(), now.getMonth()+1, 0).getDate();
}
    function setDefValues()
    {
      $("#iallowance").val(0);
      $("#tallowance").val(0);
      $("#loan").val(0);
      $("#recovery").val(0);
      $("#security").val(0);
      $("#pvalue").val(0);

    }
    setDefValues();
    </script>
  </body>
</html>