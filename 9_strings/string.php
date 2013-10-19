<?php
/**
 * PHP has powerful string functions built in.
 * http://php.net/manual/en/language.types.string.php
 */

// A string literal can be defined in four different ways:

//1. single quoted
$single_quoted = 'This is a string';

//2. double quoted
$double_quoted = "This is a string";

//3. heredoc syntax. Behaves like single quoted strings.
$heredoc = <<<MYDOC
This a string.
MYDOC;

//4. nowdoc syntax (since PHP 5.3.0) Behaves like double quoted strings.
//   A nowdoc is specified similarly to a heredoc, but no parsing is done inside a nowdoc.
$nowdoc = <<<'MYSTRING'
This is a nowdoc string.
MYSTRING;
/*****************************************************************************/
//lets define a variable.
$name = "Nick";


//and then output our variable within a string... using two different ways to define:
$single_quoted = 'My name is $name \n';
$double_quoted = "My Name is {$name} \n";

echo $single_quoted; //=> My name is $name \n
echo $double_quoted; //=> My name is Nick

//As we see single quote string do no expand variables BUT double quotes do.
/******************************************************************************/
?>
