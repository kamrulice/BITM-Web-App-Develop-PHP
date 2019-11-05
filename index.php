<?php

for($x=1; $x<=10; $x++){
	if($x<10){
		echo $x."-";
	}
	else{
		echo $x;
	}
}
echo"<br>";
echo"<br>";

$sum=0;
for ($x=0; $x <=30 ; $x++) { 
	$sum +=$x;
}
echo "Sumation is: ".$sum;
echo"<br>";
echo"<br>";

$data=0;
echo"<table border ='1'>";
for($row=1; $row<=10; $row++){
   echo"<tr>";
   for ($col=1; $col <=10 ; $col++) { 
     ++$data;
     echo"<td>$data</td>";
   }
 echo"</tr>";
}
echo"</table> ";
 echo"<br>";
echo"<br>";

echo"<table border='1'>";
for($row=1; $row<= 20; $row++){
	echo"<tr>";
	for ($col=1; $col <=10 ; $col++) { 
		 echo "<td> $row*$col = ".$row*$col."</td>";
	}
	echo"</tr>";
}
echo"</table>";

?>