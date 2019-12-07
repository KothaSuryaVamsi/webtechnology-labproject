<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
function showerror()
{
die("error:".mysql_error().":".mysql_error());
}
if(!(mysql_select_db("vamsi",$connection)))
showerror();
$a=$_POST['sname'];
$b=$_POST['fname'];
$c=$_POST['mname'];
$d=$_POST['address'];
$e=$_POST['points'];
$f=$_POST['marks'];
$g=$_POST['rank'];
$query="insert into student_details_info(Student_name,Father_name,Mother_name,Student_address,tenth_points,inter_marks,eamcet_rank) values('$a','$b','$c','$d','$e','$f','$g')";
$result=mysql_query($query,$connection);
if($result)
echo "1row inserted";
else
echo mysql_error();
$query1='select * from student_details_info';
$result1=mysql_query($query1,$connection);
$num=mysql_num_rows($result1);
echo "<table border='5'>";
for($i=0;$i<$num;$i++)
{
$row=mysql_fetch_array($result1);
echo "<tr>";
for ($n=0;$n<mysql_num_fields($result1);$n++)
{
echo "<td>";
echo $row[$n]." ";
echo "</td>";
}
echo "</tr>";
}
echo "</table>";
if($result1==1)
echo "suceesfully done";
else
echo mysql_error();
?>

