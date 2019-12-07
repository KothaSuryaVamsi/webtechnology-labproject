<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
function showerror()
{
die("error:".mysql_error().":".mysql_error());
}
if(!(mysql_select_db("vamsi",$connection)))
showerror();
$a=$_POST['name1'];
$b=$_POST['pwd'];
$c=$_POST['name4'];
$d=$_POST['vamsi'];
$e=$_POST['phone'];
$query="insert into register(username,password,conform,email,phoneno) values('$a','$b','$c','$d','$e')";
$result=mysql_query($query,$connection); 
if($result)
echo "1 row inserted";
else
echo mysql_error();
$query1='select * from register';
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
$query2="insert into login(username,password) values('$a','$b')";
$result2=mysql_query($query2,$connection);
if($result==1)
echo "entered into login datebase also";
else
echo mysql_error();
?>