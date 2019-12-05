 $array =[7,5,3,4,0,88,44,2,55,0];

for ($i=1; $i < count ($array); $i++){
  $count_sort = $i;
  for($j=$i; $j > 0; $j--){
    if($array[$count_sort] < $array[$j-1]){
      $buffer = $array[$count_sort];
      $array[$count_sort] = $array[$j-1];
      $array[$j-1] = $buffer;
      $count_sort--;
    }
  }
}
print_r($array);