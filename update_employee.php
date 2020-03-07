<?php 

  include("db.php");
  include("auth.php");

 $id = $_POST['id'];
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

  $empp = "UPDATE contarct SET NAME = '$name', RATE = '$rate', PAYABLEVALUE = '$pvalue' , INFLATION_ALLOWANCE = '$iralw' , TRAVEL_ALLOWANCE = '$tralw', CPF = '$cpf',ESIMCS = '$esimcs', TOTALDUES = '$tdues', PFDOUBLES = '$pfdoubles', RECOVERY = '$recovery' , SECURITY = '$security', LOANRECOVERY = '$loan' , ESI = '$esi' , ESIMC = '$esimc' , TOTALDEDUCTION = '$tdeduct', PAYABLEVALUES = '$pvalues' ,HOLIDAYS = '$holidays', SIGNATURE = '$sign' WHERE id='$id'";

  $sql = mysqli_query($connection,$empp);

  if ($sql)
  {
    ?>
    <script>
      alert('Employee successfully updated.');
      window.location.href='home_employee.php';
    </script>
    <?php 
  }
  else
  {
    ?>
    <script>
      alert('Invalid action.');
      window.location.href='home_employee.php';
    </script>
    <?php 
  }
?>