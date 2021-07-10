<?php
// Php code to demonstrate
// star pattern

// Function to demonstrate
// printing pattern
function pypart($n)
{
	
	// Outer loop to handle number
	// of rowsn in this case
	for ($i = 0; $i < $n; $i++)
	{
		
		// inner loop to handle
		// number of columns
		// values changing acc.
		// to outer loop
		for($j = 0; $j <= $i; $j++ )
		{
			
			// Printing stars
			echo "* ";
		}

		// ending line after
		// each row
		echo "\n";
	}
}

	// Driver Code
	$n = 5;
	pypart($n);
?>
/*OUTPUT
* 
* * 
* * * 
* * * * 
* * * * * 
*/
<?php
// PHP code to demonstrate
// star pattern

// Function to demonstrate
// printing pattern
function pypart2($n)
{
	for ($i = 1; $i <= $n; $i++) {
		for ($j = 1; $j <= $n; $j++) {
			if($j<=($n-$i)){
				echo " "." ";
				
			}else {
				echo "* ";
			}
			
		}
		echo PHP_EOL;
	}
}

	// Driver Code
	$n = 5;
	pypart2($n);

?>
/*output
        * 
      * * 
    * * * 
  * * * * 
* * * * * 
*/
<?php
// PHP code to demonstrate
// star pattern

// Function to demonstrate
// printing pattern
function triangle($n)
{
	
	// number of spaces
	$k = 2 * $n - 2;

	// outer loop to handle
	// number of rows
	// n in this case
	for ($i = 0; $i < $n; $i++)
	{
		
		// inner loop to handle
		// number spaces
		// values changing acc.
		// to requirement
		for ($j = 0; $j < $k; $j++)
			echo " ";

		// decrementing k after
		// each loop
		$k = $k - 1;

		// inner loop to handle
		// number of columns
		// values changing acc.
		// to outer loop
		for ($j = 0; $j <= $i; $j++ )
		{
			
			// printing stars
			echo "* ";
		}

		// ending line after
		// each row
		echo "\n";
	}
}

	// Driver Code
	$n = 5;
	triangle($n);
	
?>
/*
    * 
   * * 
  * * * 
 * * * * 
* * * * * 
*/
<?php
	// code
// PHP code to demonstrate
// star pattern 2

// Function to demonstrate
// printing pattern 2
function triangle_pattern($len){
$string="*";
$pyramid_str="";
$mid_point=ceil($len/2);
for($i=1;$i<=$mid_point;$i++){
	for($j = 1; $j <= $i; ++$j) {
		$pyramid_str.=$string." ";
	}
	$pyramid_str.="\r\n";
}

for($i=$mid_point;$i>=1;$i--){
	for($j = 1; $j < $i; ++$j) {
		$pyramid_str.=$string." ";
	}
	$pyramid_str.="\r\n";
}

return $pyramid_str;
}
echo triangle_pattern(9);
?>
/*
* 
* * 
* * * 
* * * * 
* * * * * 
* * * * 
* * * 
* * 
* 
*/
<?php
// PHP code to demonstrate
// printing pattern of numbers

// Function to demonstrate
// printing pattern
function numpat($n)
{
	
	// initializing starting number
	$num = 1;

	// outer loop to handle
	// number of rows
	// n in this case
	for ($i = 0; $i < $n; $i++)
	{

		// inner loop to handle
		// number of columns
		// values changing acc.
		// to outer loop
		for ($j = 0; $j <= $i; $j++ )
		{
			
			// printing number
			echo $num." ";
		}
		
			// incrementing number
			// at each column
			$num = $num + 1;

		// ending line after
		// each row
		echo "\n";
	}
}

	// Driver Code
	$n = 5;
	numpat($n);

?>
/*
1 
2 2 
3 3 3 
4 4 4 4 
5 5 5 5 5
*/
<?php
// PHP code to demonstrate
// printing pattern of numbers

// Function to demonstrate
// printing pattern
function numpat($n)
{
	
	// initialising starting
	// number
	$num = 1;

	// outer loop to handle
	// number of rows
	// n in this case
	for ($i = 0; $i < $n; $i++)
	{
		
		// inner loop to handle
		// number of columns
		// values changing acc.
		// to outer loop
		for ($j = 0; $j <= $i; $j++ )
		{
			
			// printing number
			echo $num." ";

			// incrementing number
			// at each column
			$num = $num + 1;
		}

		// ending line after
		// each row
		echo "\n";
	}
}

	// Driver Code
	$n = 5;
	numpat($n);

?>
/*
1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15 
*/
<?php
// PHP code to demonstrate printing
// pattern of alphabets

// Function to demonstrate
// printing pattern
function alphapat($n)
{
	
	// initializing value
	// corresponding to 'A'
	// ASCII value
	$num = 65;

	// outer loop to handle
	// number of rows
	// n in this case
	for ($i = 0; $i < $n; $i++)
	{
		
		// inner loop to handle
		// number of columns
		// values changing acc.
		// to outer loop
		for ($j = 0; $j <= $i; $j++ )
		{
			
			// explicitly converting
			// to char
			$ch = chr($num);

			// printing char value
			echo $ch." ";
		}

		// incrementing number
		$num = $num + 1;

		// ending line after
		// each row
		echo "\n";
	}
}

	// Driver Code
	$n = 5;
	alphapat($n);
	
?>
/*
A 
B B 
C C C 
D D D D 
E E E E E
*/
<?php
// PHP code to demonstrate printing
// pattern of alphabets

// Function to demonstrate
// printing pattern
function contalpha($n)
{
	
	// initializing value
	// corresponding to 'A'
	// ASCII value
	$num = 65;

	// outer loop to handle
	// number of rows
	// n in this case
	for ($i = 0; $i < $n; $i++)
	{
		
		// inner loop to handle
		// number of columns
		// values changing acc.
		// to outer loop
		for ($j = 0; $j <= $i; $j++ )
		{
			
			// explicitely converting
			// to char
			$ch = chr($num);

			// printing char value
			echo $ch." ";

			// incrementing number
			// at each column
			$num = $num + 1;
		}

		// ending line after each row
		echo "\n";
	}
}

	// Driver Code
	$n = 5;
	contalpha($n);
	
?>
/*
A 
B C 
D E F 
G H I J 
K L M N O 
*/