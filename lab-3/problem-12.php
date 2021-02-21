<?php
$temp = array(78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);
$sum=0;
$arrsize=count($temp);
foreach($temp as $i)
{
    $sum+=$i;
}
$avg=$sum/$arrsize;
echo "Average Temp is: ".$avg;
echo "<br>";
sort($temp);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp[$i];
echo ", ";
}
echo "<br>";
echo "List of five highest temperatures :";
for ($i=($arrsize-5);$i<$arrsize; $i++)
{
echo $temp[$i];
echo ", ";
}
?>