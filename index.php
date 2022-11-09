PHP Overview
PHP is a server-side scripting language, which is used to manage dynamic web pages, databases and build websites with features like session tracking and e-commerce. On a day of 1995, Rasmus Lerdorf unleashed the first version of “Hypertext Preprocessor” also known as the PHP language. It is also integrated with several popular databases like MySQL, PostgreSQL, Microsoft SQL Server, Oracle etc.



Uses of PHP
PHP can perform several system functions like opening files, CRUD operations on data stores, general-purpose scripting, etc. Besides system operations, there are also other uses like

Handling Forms: PHP can handle form operations. It can gather data, save data to a file and send data through emails.
Database Operations: PHP can also create, read, update and delete elements in your database.
Encryption: It can perform advanced encryption and encrypt data for you.
Dynamic Page Content: It can generate dynamic page content.


Basic Syntax PHP
A PHP script can be written anywhere inside the HTML document. A PHP script starts with tag and ends with We can write our logic inside tag and it will be executed accordingly.

<?php
// PHP code goes here
?>


Hello World
A basic PHP Hello World program looks something like this. We will use a built-in PHP function “echo” to output the text “Hello World!” on our webpage.

<!DOCTYPE html>
<html>

<body>
    <h1>My first PHP page</h1>
    <?php
    echo "Hello World!";
    ?>
</body>

</html>

PHP Comments
A comment is a part of the coding file that the programmer does not want to execute, rather the programmer uses it to either explain a block of code or to avoid the execution of a specific part of code while testing.



PHP supports several ways of commenting:
Single Line Comments

<?php
// This is a single-line comment
# This is also a single-line comment
?>


Multiple-Line Comments

<?php
/*
This is a
multiple line
Comment.
*/
?>