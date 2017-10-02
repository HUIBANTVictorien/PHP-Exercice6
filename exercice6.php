<?php
$langage = array("HTML","CSS","Javascript","PHP");
$result = order($langage);
foreach($result as $var) {
  echo $var;
}
function order($array) {
  sort($array);
  return $array;
}
function glue($array) {
  $lines = implode(', ', $array);
  return $lines;
}
echo '<br />';
$fusion = glue($langage);
echo $fusion;
?>
