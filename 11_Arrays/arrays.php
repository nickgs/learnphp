<?php
/**
 * Until now most of our exploration has been with basic primatives such as strings and numbers.
 * We will now start to explore the idea of an array.
 *
 * http://php.net/manual/en/language.types.array.php
 */

//like variables arrays hold information for us. But instead of holding just a single value,
//it can hold a variable amount of indexed data.

//We can define arrays and index them in various different ways.
//we use the array() construct to define:
$data = array();

//data is now an array. Lets put some information in it.
$data[] = "Hello";

//lets talk about above a bit.

//lets create a self indexed array:
$data = array("Mike","Nick","John","Bob","James");

print_r($data);

//lets access some information in an array:
echo $data[0];  //=> Mike


//associative arrays.
//we can define our indexes using a string.
$data = array('firstname'=>"Nick",
              'lastname'=>"Selvaggio");

//now we can access our information using a string index:
echo $data['firstname'];  //=> Nick
?>
