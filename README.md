# PHP: Unexpected Behavior in Numeric Array Count Function

This repository demonstrates an uncommon PHP bug related to type juggling and array processing. The `foo` function aims to count numeric elements within an array. However, the function may yield unexpected results if the input array contains numeric strings. 

## Bug Description
The `is_numeric()` function in PHP can lead to unexpected behavior when dealing with strings that can be interpreted as numbers. This can result in an incorrect count of numeric elements.

## Solution
The provided solution addresses this issue by explicitly casting values to numbers before comparison, thus ensuring accurate numeric value identification regardless of the initial data type.