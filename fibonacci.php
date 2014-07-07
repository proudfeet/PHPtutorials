<?php 

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
echo "Function";
print_r(fibonacci($term));
echo "</pre>";


?>