The solution is to use strict comparison (`===`) when checking if array keys exist.  This ensures that both the value and type are compared, preventing unexpected results from loose comparisons.

```php
<?php
function checkValue(array $arr, $value): bool {
  return array_key_exists($value, $arr) ;
}

$arr = ["0" => 10];

if (checkValue($arr, 0)) {
    echo "Value found using strict comparison";
} else {
    echo "Value not found";
}

$arr = [0 => 10];

if (checkValue($arr, "0")) {
    echo "Value found using strict comparison";
} else {
    echo "Value not found";
}
?>
```