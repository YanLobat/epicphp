<?php 
	$stroka = "mama mila ramu";
	$pieces = explode(" ",$stroka);
	$i = 0;
	$k = 0;
	foreach ($pieces as $pieces[$i])
	{
		if (strlen($pieces[$i]) % 2 == 0)
			$k = $k + 1;
	}
	echo $k;
?>