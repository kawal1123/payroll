<?php
  $conn = mysqli_connect('localhost', 'root', '','salary');
 


  if(isset($_POST['submit'])!="")
  {
    $empID = $_POST['empID'];  
    $name  = $_POST['name'];
    $rate       = $_POST['rate'];
    $pvalue = $_POST['pvalue'];
    $homerent        = $_POST['homerent'];
    $inflationallowance = $_POST['iallowance24'];
    $inflationallowances=$_POST['iallowance31'];
    $medicalallowance=$_POST['mallowance'];
    $cca      = $_POST['cca'];
    $tdues     = $_POST['tdues'];
    $cpfmcs = $_POST['cpfmcs'];
    $esimcs = $_POST['esimcs'];
    $salary = $_POST['salary'];
    $pfdoubles       = $_POST['pfdoubles'];
    $esi = $_POST['esi'];
    $esimc = $_POST['esimc'];
    $loan      = $_POST['loan'];
    $recovery       = $_POST['recovery'];
    $tdeduct   = $_POST['tdeduct'];
    $pvalues       = $_POST['pvalues'];
    $holidays = $_POST['holidays'];
    $sign   = $_POST['sign'];
    $month=date("F");
    $year  = date("Y");
    
    $add = "INSERT into contarct1 Values ('','$empID','$name','$rate','$pvalue', '$homerent','$inflationallowance','$inflationallowances','$medicalallowance','$cca','$tdues','$cpfmcs','$esimcs','$salary','$pfdoubles','$esi','$esimc','$loan','$recovery','$tdeduct','$pvalues','$holidays','$sign','$month','$year')";
    $sql = mysqli_query($conn,$add);

    if($sql)
    {
      ?>
        <script>
            alert('Employee had been successfully added.');
            window.location.href='home_employee1.php';
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