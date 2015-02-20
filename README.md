# PHP-Tables-Manager
[PHP] HTML Tables manager (Tablesman) - Create and customize tables with this PHP class

Do you hate HTML tables like I do? 
Too much complications for such a small thing! So I come with idea and solution.
PHP Class which makes this process simple and straight forward.


# Usage
Take a look at example.php file, and on tablesman.class.php file as well.
For initialization of class you must have a look in example.php file.

Basic use:
  $table->create("test", "class", "border='0'");         // It will create HTML table with name table_name and class as identifier. Also border is set to 3 <- in that parameter you can add any table additional code.
  $table->header("Foo | Bar | Just a test", "|");        // create table headers Foo and Bar
  $table->row("column #1 |column #2| column #3", "|");   // Create table rows, there is no limit
  $table->close();                                       // Close table
  
  Also you can set global delimiter so:
  
  $table->setGlobalDelimiter("|");
  $table->create("test", "class", "border='0'");        
  $table->header("Foo | Bar | Just a test");        
  $table->row("column #1 |column #2| column #3");   
  $table->close();                                       

Anyway, you still can specify limiter in specific calls.


# Copyright 
You are free to do with this software whatever you want, except binding malware with it and spreading it.
So, copy, modify, say it yours, whatever, it's free, and I do not mind, but respect one rule above.
