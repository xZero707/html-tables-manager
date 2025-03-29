# PHP-Tables-Manager
[PHP] HTML Tables manager (Tablesman)

This project is abandoned in favor of: [donquixote/cellbrush](https://github.com/donquixote/cellbrush)

--

Do you hate HTML tables like I do? 
Too much complications and code for such a small thing! So I come with idea and solution.
PHP Class which makes this process simple and straight forward.

# Installation
```
composer require xzero707/html-tables-manager
```
or
clone repo and include tablesman.class.php

# Usage

Basic use (assuming class is loaded and initialized):
```php
$table->setOption('class', 'example_table');
$table->setOption('id', 'example_table');
$table->setOption('CODE', "border='1'");
$table->create();
$table->header(array("Header #1", "Header #2", "Header #3"));
$table->row(array("Foo", "Bar", "Foobar"));
$table->row(array("Foo #2", "Bar #2", "Foobar #2"));
$table->footer(array("", "Foobar", ""));
$table->close();

echo implode("", $table->output); // Finaly flush output
```

<br/>
For more details and examples, check out [example.php](https://github.com/xZero707/PHP-Tables-Manager/blob/master/example.php)<br/>
<br/>

**LICENSE AGREEMENT**

Read it here: [LICENSE](https://github.com/xZero707/PHP-Tables-Manager/blob/master/LICENSE)
