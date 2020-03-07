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
            <li >
              <a href="home_employee.php">CONTRACT</a>
            </li>
            <li class="active">
              <a href="">REGULAR</a>
            </li>
            
            <li>
              <a href="home_salary.php">Income</a>
            </li>
          </ul>
        </nav>
      </div><br><br>

      <?php
        $id=$_GET['id'];
        $query = "SELECT * from contarct1 where id='".$id."'";
        $result = mysqli_query($connection,$query) or die ( mysqli_error());

        while ($row = mysqli_fetch_array($result))
        {
          ?>

              <form class="form-horizontal col-md-10" action="update_employee1.php" method="post" name="form">
                <input type="hidden" name="new" value="1" />
                <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                
                <form class="form-horizontal" action="#" name="form" method="post" autocomplete="off">
                <div class="form-group">
                  <label class="col-sm-4 control-label">Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="name" class="form-control" placeholder="Name" required="required" value="<?php echo $row[2]; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label">Rate</label>
                  <div class="col-sm-8">
                    <input type="text" name="rate" id="rate" onkeyup="calculate()" class="form-control" placeholder="Rate" required="required" value="<?php echo $row[3]; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-sm-4 control-label">Payble Value</label>
                  <div class="col-sm-8">
                    <input onkeyup="calculate2()" type="text" name="pvalue" id="pvalue" class="form-control" placeholder="Payble Value" required="required" value="<?php echo $row[4]; ?>">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-4 control-label">Home Rent</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTotal()" type="text" name="homerent" id="homerent" class="form-control" placeholder="Home Rent" required="required" value="<?php echo $row[5]; ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Inflation Allowance 24%</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTotal()" type="text" name="iallowance24" id="iallowance24" class="form-control" placeholder="inflation allowance" required="required" value="<?php echo $row[6]; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Inflation Allowance 31%</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTotal()" type="text" name="iallowance31" id="iallowance31" class="form-control" placeholder="inflation allowance" required="required" value="<?php echo $row[7]; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Medical Allowance</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTotal()" type="text" name="mallowance" id="mallowance" class="form-control" placeholder="inflation allowance" required="required" value="<?php echo $row[8]; ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">CCA</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTotal()" type="text" name="cca" id="cca" class="form-control" placeholder="CPF" required="required" value="<?php echo $row[9]; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Total Dues</label>
                  <div class="col-sm-8">
                    <input type="text" name="tdues" id="tdues" class="form-control" placeholder="Total Dues" required="required" value="<?php echo $row[10]; ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">CPF MC Share</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTotal()" type="text" name="cpfmcs" id="cpfmcs" class="form-control" placeholder="ESI" required="required" value="<?php echo $row[11]; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">ESI MC Share</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcTotal()" type="text" name="esimcs" id="esimcs" class="form-control" placeholder="ESIMC" required="required" value="<?php echo $row[12]; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Salary</label>
                  <div class="col-sm-8">
                    <input type="text" name="salary" id="salary" class="form-control" placeholder="ESIMC" required="required" value="<?php echo $row[13]; ?>">
                  </div>
                </div>
                <br>
                <div><h4 align="center">Deductions</h4></div>
                <br>
                 <div class="form-group">
                  <label class="col-sm-4 control-label">PFDoubles</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcDeduction()" type="text" name="pfdoubles" id="pfdoubles" class="form-control" placeholder="PFDoubles" required="required" value="<?php echo $row[14]; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">ESI</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcDeduction()" type="text" name="esi" id="esi" class="form-control" placeholder="ESI SCR" required="required" value="<?php echo $row[15]; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">ESI MC Share</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcDeduction()" type="text" name="esimc" id="esimc" class="form-control" placeholder="ESIMC" required="required" value="<?php echo $row[16]; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Loan Recovery</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcDeduction()" type="text" name="loan" id="loan" class="form-control" placeholder="Loan Recovery" required="required" value="<?php echo $row[17]; ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Recovery</label>
                  <div class="col-sm-8">
                    <input onkeyup="calcDeduction()" type="text" name="recovery" id="recovery" class="form-control" placeholder="Recovery" required="required" value="<?php echo $row[18]; ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Total Deduction</label>
                  <div class="col-sm-8">
                    <input type="text" name="tdeduct" id="tdeduct" class="form-control" placeholder="Total Deduction" required="required" value="<?php echo $row[19]; ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Payble Values</label>
                  <div class="col-sm-8">
                    <input type="text" name="pvalues" id="pvalues" class="form-control" placeholder="Payble Values" required="required" value="<?php echo $row[20]; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Holidays</label>
                  <div class="col-sm-8">
                    <select name="holidays" id="holidays" class="form-control" required="required" onchange="deductHolidays()">
                    <option value="1">0</option>
                    <?php
                    for($x = 1;$x<=31;$x++){
                      if($x == $row[21])
                      echo "<option selected>$x</option>";
                      else
                      echo "<option>$x</option>";
                    }
                    ?>
                    </select>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-4 control-label">Signature</label>
                  <div class="col-sm-8">
                    <input type="text" name="sign" class="form-control" placeholder="Signature" required="required" value="<?php echo $row[22]; ?>">
                  </div>
                </div>



                  <br><br>

                  <div class="form-group">
                    <label class="col-sm-5 control-label"></label>
                    <div class="col-sm-4">
                      <input type="submit" name="submit" value="Update" class="btn btn-danger">
                      <a href="home_employee1.php" class="btn btn-primary">Cancel</a>
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
<script>
    let pValues,tDeduct;
      pValues = document.querySelector("#pvalues").value;
      tDeduct = document.querySelector("#tdeduct").value;
    function calculate()
    {
      let rate = $("#rate").val();
      $("#pvalue").val(rate);
      calculate2();
    }
    function calculate2() {
      let pValue = $("#pvalue").val();
      $("#homerent").val(parseInt(pValue*20/100));
      $("#iallowance24").val(parseInt(pValue*24/100));
      $("#iallowance31").val(parseInt(pValue*31/100));
      $("#cpf").val(parseInt(pValue*10/100));
      $("#tdues").val(parseInt($("#pvalue").val())+parseInt($("#homerent").val()) + parseInt($("#iallowance24").val()) + parseInt($("#iallowance31").val())+parseInt($("#mallowance").val())+parseInt($("#cca").val()));
      $("#cpfmcs").val(parseInt(pValue*10/100));
      $("#esimcs").val(parseInt($("#tdues").val()*4.755/100));
      $("#esi").val(parseInt($("#tdues").val()*1.755/100));
      $("#pfdoubles").val(parseInt(pValue*20/100));
      $("#salary").val(parseInt($("#tdues").val())+parseInt($("#cpfmcs").val())+parseInt($("#esimcs").val()));
      $("#esimc").val(parseInt($("#tdues").val()*4.755/100));
      pValues = parseInt($("#salary").val() - $("#pfdoubles").val() - $("#esi").val() - $("#esimc").val() - $("#loan").val() - $("#recovery").val());
      $("#pvalues").val(pValues);
      tDeduct = parseInt($("#pfdoubles").val()) + parseInt($("#esi").val()) + parseInt($("#esimc").val()) + parseInt($("#loan").val()) + parseInt($("#recovery").val());
      $("#tdeduct").val(tDeduct);
      deductHolidays();
    }
    function calcTotal()
    {
      $("#tdues").val(parseInt($("#pvalue").val())+parseInt($("#homerent").val()) + parseInt($("#iallowance24").val()) + parseInt($("#iallowance31").val())+parseInt($("#mallowance").val())+parseInt($("#cca").val()));
      $("#salary").val(parseInt($("#tdues").val())+parseInt($("#cpfmcs").val())+parseInt($("#esimcs").val()));
      pValues = parseInt($("#salary").val() - $("#pfdoubles").val() - $("#esi").val() - $("#esimc").val() - $("#loan").val() - $("#recovery").val());
      $("#pvalues").val(pValues);
      tDeduct = parseInt($("#pfdoubles").val()) + parseInt($("#esi").val()) + parseInt($("#esimc").val()) + parseInt($("#loan").val()) + parseInt($("#recovery").val());
      $("#tdeduct").val(tDeduct);
    }
    function calcDeduction() 
    {
      pValues = parseInt($("#salary").val() - $("#pfdoubles").val() - $("#esi").val() - $("#esimc").val() - $("#loan").val() - $("#recovery").val());
      $("#pvalues").val(pValues);
      tDeduct = parseInt($("#pfdoubles").val()) + parseInt($("#esi").val()) + parseInt($("#esimc").val()) + parseInt($("#loan").val()) + parseInt($("#recovery").val());
      $("#tdeduct").val(tDeduct);
    }
   function deductHolidays() {
      $("#tdeduct").val(parseInt(tDeduct) + (parseInt( pValues / daysInMonth() ) * ($("#holidays").val() -1 )) );
      $("#pvalues").val(parseInt(pValues - parseInt( pValues / daysInMonth() ) * ($("#holidays").val() -1 )) );
    }
    function daysInMonth() {
  var now = new Date();
  return new Date(now.getFullYear(), now.getMonth()+1, 0).getDate();
}
    function setDefValues()
    {
    $("#mallowance").val(500);
    $("#cca").val(180);
    $("#iallowance24").val(0);
    $("#iallowance31").val(0);
    $("#loan").val(0);
    $("#recovery").val(0);
    $("#pvalue").val(0);
    }
    setDefValues();
    </script>
  </body>
</html>