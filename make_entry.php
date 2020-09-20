<?php
$servername = "localhost";
$username = "prakrtpd_aduser";
$password = "pEQHinK5qsGT";
$database = "prakrtpd_skadam";

// Create connection
$conn = mysql_connect($servername, $username, $password) or die("Could not connect database");
mysql_select_db($database,$conn) or die("Could not connect database");

if(isset($_POST['user_sur_name'])&&isset($_POST['voter_id'])&&isset($_POST['mobile_no'])) {
    $l_name=$_POST["user_sur_name"];
    $f_name=$_POST["user_first_name"];
    $m_name=$_POST["user_middle_name"];
    $vid=$_POST["voter_id"];
    $mno=$_POST["mobile_no"];
    $addr=$_POST["address"];
    $addr_1=$_POST["address_1"];
    $addr_2=$_POST["address_2"];
    $addrt=$_POST["address_type"];
    if(isset($_POST['land_lord_name']))
$llname=$_POST['land_lord_name'];
else
$llname='';


   $qry=mysql_query("INSERT INTO entry(l_name,f_name,m_name,voter_id,contact_no,address,address_type,land_lord_name,colony,nagar) VALUES ('$l_name','$f_name','$m_name','$vid','$mno','$addr','$addrt','$llname','$addr_1','$addr_2')");

    if($qry)
    {
        header('Location: success.html');
    }
    else
    {
        header('Location: failed.html');
    } 
/*$qry1=mysql_query("select * from entry");
while($row=mysql_fetch_array($qry1))
  {
echo $row['l_name'];
echo $row['f_name'];
echo $row['m_name'];
echo $row['address'];
echo $row['address_type'];
echo $row['land_lord_name'];
echo "<br/>";
} */
}
else
echo '<center><font color="red"><h1>Problem with Parameters</h1></font></center>';
?>