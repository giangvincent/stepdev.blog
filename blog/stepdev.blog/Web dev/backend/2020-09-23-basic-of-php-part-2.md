---
title: Basic of PHP Part 2
path: /basic-of-php-part-2
date: 2020-08-05
summary: You finished install XAMPP or local enviroment and VS Code or some other Code Editor. Its time to learning some real basic syntax of php like Types, Variables, Constant and Operators.
categories: ["Backend Developer", "PHP"]
tags: ["php", "backend", "basic", "step 1"]
---

## PHP Data Types

A Data type is the classification of data into a category according to its attributes;

- Alphanumeric characters are classified as strings
- Whole numbers are classified integers
- Numbers with decimal points are classified as floating points.
- True or false values are classified as Boolean.

PHP is a loosely typed language; it does not have explicit defined data types. PHP determines the data types by analyzing the attributes of data supplied. PHP implicitly supports the following data types

Integer – whole numbers e.g. -3, 0, 69. The maximum value of an integer is platform-dependent. On a 32 bit machine, it’s usually around 2 billion. 64 bit machines usually have larger values. The constant PHP_INT_MAX is used to determine the maximum value.

Floating point number – decimal numbers e.g. 3.14. they are also known as double or real numbers. The maximum value of a float is platform-dependent. Floating point numbers are larger than integers.
Character string – e.g. Hello World
Boolean – e.g. True or false.
Before we go into more details discussing PHP data types, let’s first discuss variables

## PHP Variable

A variable is a name given to a memory location that stores data at runtime.

The scope of a variable determines its visibility.

A Php global variable is accessible to all the scripts in an application.

A local variable is only accessible to the script that it was defined in.

Think of a variable as a glass containing water. You can add water into the glass, drink all of it, refill it again etc.

The same applies for variables. Variables are used to store data and provide stored data when needed. Just like in other programming languages, PHP supports variables too. Let’s now look at the rules followed when creating variables in PHP.

- All variable names must start with the dollar sign e.g. `php $my_var`
- Variable names are case sensitive; this means $my_var is different from $MY_VAR
- All variables names must start with a letter follow other characters e.g. $my_var1. $1my_var is not a legal variable name.
- Variable names must not contain any spaces, “$first name” is not a legal variable name. You can instead use an underscore in place of the space e.g. $first_name. You cant use characters such as the dollar or minus sign to separate variable names.

Let’s now look at how PHP determines the data type depending on the attributes of the supplied data.

```php
<?php
$my_var = 1;
echo $my_var;
$my_var = 3.14;
echo $my_var;
$my_var ="Hypertext Pre Processor";
echo $my_var;
?>
```

Output

```
1
3.14
Hypertext Pre Processor
```

## Use of Variables

Variables help separate data from the program algorithms.

The same algorithm can be used for different input data values.

For example, suppose that you are developing a calculator program that adds up two numbers, you can create two variables that accept the numbers then you use the variables names in the expression that does the addition.
