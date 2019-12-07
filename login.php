<?php
if(!($connection=mysql_connect("localhost","root","")))
die("could not connect");
function showerror()
{
die("error:".mysql_error().":".mysql_error());
}
if(!(mysql_select_db("vamsi",$connection)))
showerror();
$a=$_POST['login'];
$b=$_POST['pwd'];
$query1='select * from login';
$result1=mysql_query($query1,$connection);
$num=mysql_num_rows($result1);
$e=0;
for($i=0;$i<$num;$i++)
{
$row=mysql_fetch_array($result1);
//$c=$row[0]." ";
//$d=$row[1]." ";
if($a==$row['username'] && $b==$row['password'])
{
echo "login successfully";
$e=1;
break;
}
}
if($e==0)
{
echo "invalid username or password";
}
?>
