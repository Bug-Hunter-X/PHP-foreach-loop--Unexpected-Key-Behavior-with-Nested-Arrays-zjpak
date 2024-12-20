```php
function buggyFunction($array) {
  if (empty($array)) {
    return []; // Handle empty array
  }

  $result = [];
  foreach ($array as $key => $value) {
    // The bug is here:  Incorrect key handling if $value is an array
    $result[$value] = $value; 
  }
  return $result;
}

$myArray = [1, 2, [3, 4]];
$result = buggyFunction($myArray);
print_r($result); // unexpected output
```