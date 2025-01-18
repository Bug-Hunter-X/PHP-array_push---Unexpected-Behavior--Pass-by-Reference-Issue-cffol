```php
<?php
$myArray = array();

//CORRECT USAGE: Pass by reference
array_push( &$myArray, 'value1');
array_push( &$myArray, 'value2');
print_r($myArray); // Outputs: Array ( [0] => value1 [1] => value2 )

array_push( &$myArray, 'value3' ); // Correctly modifies the original array
print_r($myArray); // Outputs: Array ( [0] => value1 [1] => value2 [2] => value3 )
?>
```