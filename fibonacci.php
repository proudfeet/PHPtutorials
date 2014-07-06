<?php 




function fibonacci($n, $first = 0, $second = 1)
// Must declare this as a function, as it will not run properly otherwise

{
  $start = [$first, $second];
  for($i=1;$i<$n;$i++)
  {
    $fib[] = $fib[$i]+$fib[$i-1];
  }
  return $fib;
}
echo "<pre>";
print_r(fibonacci(50));
// echo "</pre>";

?>
