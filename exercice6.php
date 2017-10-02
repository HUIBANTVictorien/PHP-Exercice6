<?php
function ordre($array) {
  sort($array);
  return $array;
}
function glue($array) {
  $lignes = implode(', ', $array);
  return $lignes;
}
$langage = array("HTML","CSS","Javascript","PHP");
$result = ordre($langage);
foreach($result as $var) {
  echo $var;
}
echo "\n" ;
$fusion = glue($langage);
echo $fusion;
?>
