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
$table->setOption('class', 'example_table');<br/>
$table->setOption('CODE', "border='1'");<br/>
$table->create();<br/>
$table->header(array("Header #1", "Header #2", "Header #3"));<br/>
$table->row(array("Foo", "Bar", "Foobar"));<br/>
$table->row(array("Foo #2", "Bar #2", "Foobar #2"));<br/>
$table->footer(array("", "Foobar", ""));<br/>
$table->close();<br/>

echo implode("", $table->output); // Finaly flush output<br/>
<br/>
For more details and examples, check out [example.php](https://github.com/xZero707/PHP-Tables-Manager/blob/master/example.php)<br/>
<br/>

**LICENSE AGREEMENT**

Read it here: [LICENSE](https://github.com/xZero707/PHP-Tables-Manager/blob/master/LICENSE)