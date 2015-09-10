# PHP-Tables-Manager
[PHP] HTML Tables manager (Tablesman)

--

Do you hate HTML tables like I do? 
Too much complications and code for such a small thing! So I come with idea and solution.
PHP Class which makes this process simple and straight forward.


# Usage
Take a look at example.php file, and on tablesman.class.php file as well.
For initialization of class you must have a look in example.php file.

Basic use:
$table->setOption('class', 'example_table');
$table->setOption('CODE', "border='1'");
$table->create();
$table->header(array("Header #1", "Header #2", "Header #3"));
$table->row(array("Foo", "Bar", "Foobar"));
$table->row(array("Foo #2", "Bar #2", "Foobar #2"));
$table->footer(array("", "Foobar", ""));
$table->close();

echo implode("", $table->output); // Finaly flush output

For more details and examples, check out example.php


**LICENSE AGREEMENT**

Read it here: [LICENSE](https://github.com/xZero707/PHP-Tables-Manager/blob/master/LICENSE)