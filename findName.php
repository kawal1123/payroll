<?php
    $name = $_POST['user_name'];
    $table = $_POST['table'];
    $conn = mysqli_connect('localhost', 'root', '', 'salary');
    if($table == "contart1")
        $qry = "select name,emp_id from staffinfo where name like '%$name%' and type= 'Regular'";
    else
        $qry = "select name,emp_id from staffinfo where name like '%$name%' and type='Contract'";
    $res = mysqli_query($conn,$qry);
    $rows = mysqli_num_rows($res); 
    if($rows == 0)
        echo "false";
    $i = 1;
    while($R = mysqli_fetch_array($res))
    {
        if(($rows == 1 and strtolower($R[0]) == strtolower($name)) || $i>3)
            break;
        else
            echo "<button onclick='fillName(this)' type='button' class='list-group-item' id='$R[1]' title='$R[0]'>$R[0] -> $R[1]</button>";
        $i++;
    }
?>