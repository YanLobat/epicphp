<?php 
	$stroka = "mama mila ramu";
	function registr($stroka)
	{
		$new_stroka = "";
		for ($i = 0; $i <= strlen($stroka); $i++)
			if (($i != 0) and ($i % 2 == 0))
			{	
				$new_stroka .= strtoupper(substr($stroka,$i,1));
			}
			else 
			{
				$new_stroka .= substr($stroka,$i,1);
			}
			return $new_stroka;
	}
	echo registr($stroka);
?>