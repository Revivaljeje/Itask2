<?php
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n % $x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
$j = IsPrime(7);
if ($j==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";
?>