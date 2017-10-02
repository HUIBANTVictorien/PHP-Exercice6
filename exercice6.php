<?php
function order($array) {
  sort($array);
  return $array;
}
function uhu($array) {
  $lignes = implode(', ', $array);
  return $lignes;
}
$langage = array("HTML","CSS","Javascript","PHP");
$result = order($langage);
foreach($result as $var) {
  echo $var;
}
echo '<br />';
$collerserrer = uhu($langage);
echo $collerserrer;
?>
