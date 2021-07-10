<?php
//array values
	$a[] = "raju";
	$a[] = "kaju";
	$a[] = "bachu";
	$a[] = "dhiru";
	$a[] = "kalu";
	$a[] = "cooker";
	$a[] = "havsi";
	$a[] = "dhosawala";
	$a[] = "vimal";
	$a[] = "jadu";
	$a[] = "rajnigandha";
	$a[] = "kamlesh";
	$a[] = "babukasai";
	$a[] = "kalubhai kery vala";
	$a[] = "lodasingh";
	$a[] = "bhavin chodu";
	$a[] = "vidhi valo jay";

// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";

//lookup all hints from array if $q is different from ""
if($q !== "")
{
	$q = strtolower($q);
	$len = strlen($q);
	foreach($a as $name)
	{
		if(stristr($q, substr($name, 0, $len)))
		{
			if($hint === "")
			{
				$hint = $name;
			}
			else
			{
				$hint .= ", $name";
			}
		}
	}
}
// OUTPUT "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint; 
?>