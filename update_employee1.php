<?php 

  include("db.php");
  include("auth.php");


 $id = $_POST['id'];
 $name  = $_POST['name'];
 $rate       = $_POST['rate'];
 $pvalue = $_POST['pvalue'];
 $homerent        = $_POST['homerent'];
 $iallowance24 = $_POST['iallowance24'];
 $iallowance31=$_POST['iallowance31'];
 $mallowance=$_POST['mallowance'];
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

  $empp = "UPDATE contarct1 SET NAME = '$name', RATE = '$rate', PAYABLEVALUE = '$pvalue' , HOME_RENT = '$homerent' , INFLATION_ALLOWANCE = '$iallowance24', INFLATION_ALLOWANCE2  = '$iallowance31' , MEDICAL_ALLOWANCE = '$mallowance' , CCA = '$cca', TOTALDUES = '$tdues',CPFMCS = '$cpfmcs',  ESIMCS = '$esimcs' , SALARY = '$salary',PFDOUBLES = '$pfdoubles', ESI = '$esi' , ESIMC = '$esimc' ,  LOANRECOVERY = '$loan' ,RECOVERY = '$recovery' , TOTALDEDUCTION = '$tdeduct', PAYABLEVALUES = '$pvalues' ,HOLIDAYS = '$holidays', SIGNATURE = '$sign' WHERE id='$id'";

  $sql = mysqli_query($connection,$empp);

  if ($sql)
  {
    ?>
    <script>
      alert('Employee successfully updated.');
      window.location.href='home_employee1.php';
    </script>
    <?php 
  }
  else
  {
    ?>
    <script>
      alert('Invalid action.');
      window.location.href='home_employee1.php';
    </script>
    <?php 
  }
?>