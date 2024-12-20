# PHP foreach Loop Bug: Unexpected Key Behavior with Nested Arrays

This repository demonstrates a subtle bug in PHP's `foreach` loop when dealing with arrays containing other arrays as values. The `bug.php` file shows the problematic code, and `bugSolution.php` provides the corrected version.

## Bug Description

The original code incorrectly uses the nested array as a key in the `foreach` loop. This leads to unexpected output and potential errors when processing nested data structures.

## Solution

The solution involves carefully handling the case where a value is an array, either by skipping it or processing it appropriately using recursion.