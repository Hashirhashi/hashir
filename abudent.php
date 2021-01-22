<html>
<body>
<form method="post">
Enter the number:
<input type="number" name="number">

<input type="submit" value="submit">
</form>
</body>
</html>

<?php
if($_POST)
{
$N=$_post['number'];
$sum=0;
for($i=1;$i<$N;$i++)
{
if($N%$i==0)
{
$sum=$sum+$i;
}}
if($sum==$N)
echo "$N is perfect";
else if($sum<$N)
echo "$N is deficient";
else
echo "$N is Abudant";
}
?>