<?php
for($i=1;$i<=3;$i++)
{
   for ($j=1;$j<=$i;$j++)
    {
	 echo "*";
	    if($i< $j)
		 {
		   echo " ";
		 }
     }
 echo "\n";
}
?>


<?php
$n = 3; 
echo "n = " . $n . "\n";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = 1; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "\n";
   }
?>