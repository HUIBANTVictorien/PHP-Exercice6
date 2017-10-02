<?php
$langage = array("HTML","CSS","Javascript","PHP");
$result = order($langage);
foreach($result as $var) {
  echo $var;
}
function order($langage) {
  sort($langage);
  return $langage;
}
function glue($langage) {
  $lines = implode(', ', $langage);
  return $lines;
}
echo '<br />';
$fusion = glue($langage);
echo $fusion;
?>
