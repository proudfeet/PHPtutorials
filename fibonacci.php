<?php 

// The recursive method, displays each iteration of the fibonacci sequence until the desired term

$term = intval($_POST['fibterm']);

function fibonacci($term, $first = 0, $second = 1)
// Must declare this as a function, as it will not run properly otherwise

{
  $sequence = [$first,$second];
  for($i=1;$i<$term;$i++)
  {
    $sequence[] = $sequence[$i]+$sequence[$i-1];
  }
  return $sequence;
}
echo "<pre>";
print_r(fibonacci($term));
echo "</pre>";

?>

<?php 

// The iterative method, shows only the term requested

$term = intval($_POST['fibterm']);

function fibonacciIter($term) {


	$index1 = 1;
	$index2 = 1;
	$fib = 0;

	for ($i=1; $i<$term;$i++) 
	{ 
		$fib = $index1 + $index2;	
		$index2 = $index1;
		$index1 = $fib;
	}

	print_r($fib);

}

?>

