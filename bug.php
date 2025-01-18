This code snippet demonstrates a common error in PHP related to improper handling of array keys when using array_push().  The array_push() function expects the array to be passed by reference (&).  Without the &, the function will operate on a copy of the array, leaving the original array unchanged.  This often leads to unexpected behavior and frustrating debugging sessions.

```php
<?php
$myArray = array();
array_push($myArray, 'value1');
array_push($myArray, 'value2');
print_r($myArray); // Outputs: Array ( [0] => value1 [1] => value2 )

//INCORRECT USAGE
array_push( $myArray, 'value3' ); // Does NOT modify the original array
print_r($myArray); // Still outputs: Array ( [0] => value1 [1] => value2 )

//CORRECT USAGE
array_push( &$myArray, 'value4' ); // Modifies the original array
print_r($myArray); // Outputs: Array ( [0] => value1 [1] => value2 [2] => value4 )
?>
```