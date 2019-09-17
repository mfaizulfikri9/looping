<html>
<head>
<title> Bilangan </title>
</head>
<h1> <center> DERET BILANGAN </h1></center>
<br>

<form action="" method=get>
<center>INPUT JUMLAH BILANGAN <input type=number name=n> <input type=submit value=General>
</form>
<br>
<br>
<?php
$n=$_GET['n'];
$i=1;
for ($i>=0;$i<=$n;$i++)
{
echo $i."";
if($bagi=$i%10 ==0)
{echo"<br>";
}
}
?>
</body>
</html>