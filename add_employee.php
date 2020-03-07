<?php
  $conn = mysqli_connect('localhost', 'root', '','salary');
 


  if(isset($_POST['submit'])!="")
  {
    $empID = $_POST['empID'];  
    $name  = $_POST['name'];
    $rate       = $_POST['rate'];
    $pvalue = $_POST['pvalue'];
    $iralw        = $_POST['iallowance'];
    $tralw       = $_POST['tallowance'];
    $cpf      = $_POST['cpfmcs'];
    $esimcs       = $_POST['esimcs'];
    $tdues     = $_POST['tdues'];
    $pfdoubles       = $_POST['pfdoubles'];
    $recovery   = $_POST['recovery'];
    $security      = $_POST['security'];
    $loan      = $_POST['loan'];
    $esi     = $_POST['esi'];
    $esimc       = $_POST['esimc'];
    $tdeduct   = $_POST['tdeduct'];
    $pvalues       = $_POST['pvalues'];
    $holidays = $_POST['holidays'];
    $sign   = $_POST['sign'];
    $month=date("F");
    $year  = date("Y");

    $add = "INSERT into contarct Values ('','$empID','$name','$rate','$pvalue','$iralw','$tralw','$cpf','$esimcs','$tdues','$pfdoubles','$recovery','$security','$loan','$esi','$esimc','$tdeduct','$pvalues','$holidays','$sign','$month','$year')";
    $sql = mysqli_query($conn,$add);

    if($sql)
    {
      ?>
        <script>
            alert('Employee had been successfully added.');
            window.location.href='home_employee.php';
        </script>
      <?php 
    }

    else
    {
      ?>
        <script>
            alert('Invalid.');
            window.location.href='index.php';
        </script>
      <?php 
    }
  }
?>