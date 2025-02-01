function foo(array $arr): int {
  if (empty($arr)) {
    return 0; 
  }
  $count = 0;
  foreach ($arr as $value) {
    if (is_numeric($value)) {
      $count++;
    }
  }
  return $count;
}

$arr = [1, 2, 'a', 3, 'b', 4];
echo foo($arr); //Output: 4

$arr = ['a','b','c'];
echo foo($arr); //Output: 0

$arr = [];
echo foo($arr); //Output: 0