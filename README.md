# PHP array_push() Unexpected Behavior

This repository demonstrates a common error in PHP when using the `array_push()` function.  The issue arises from not using pass-by-reference, leading to the original array remaining unchanged after calling `array_push()`.  This often causes unexpected behavior and debugging challenges.

The `bug.php` file showcases the incorrect usage, while `bugSolution.php` provides the corrected version.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.
4. Run `bugSolution.php` and compare the output.

## Resolution

The solution involves correctly using pass-by-reference (&) with the `array_push()` function to modify the original array directly.

This example highlights the importance of understanding PHP's variable passing mechanisms to avoid common pitfalls.