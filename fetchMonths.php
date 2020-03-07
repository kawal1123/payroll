<?php
$year = $_POST['year'];
$type = $_POST['type'];
$emp_id = $_POST['emp_id'];
$theMonth = $_POST['theMonth'];
include "db.php";
if (strtolower($type) == "regular")
$qry = "select distinct(MONTH) from contarct1 where emp_id = '$emp_id' and YEAR = '$year'";
else
$qry = "select distinct(MONTH) from contarct where emp_id = '$emp_id' and YEAR = '$year'";
echo $qry;
$res = mysqli_query($connection,$qry);
$i = 0;
while($R = mysqli_fetch_array($res)) {
    $monthsArray[$i] = $R[0];
    $i++;
}
$allMonthsArray = array('January','February','March','April','May','June','July','August','September','October','November','December');
for ($i=0;$i<count($monthsArray);$i++)
{
    $key = array_search($monthsArray[$i],$allMonthsArray);
    $temp[$key] = $monthsArray[$i];
}
ksort($temp);
$lastMonth = end($temp);
$flagSelected = false;
foreach ($temp as $month)
{
    if( $theMonth == $month) { 
    echo "<option selected> $month </option>";
    $flagSelected = true;   
    }
    elseif($month == $lastMonth && $flagSelected == false)
    echo "<option selected> $month </option>";
    else
    echo "<option> $month </option>";
}
echo "<script> var MonthSelected = '".$lastMonth."';</script>";
?>